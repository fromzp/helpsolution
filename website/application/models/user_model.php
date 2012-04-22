<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//@doto taxnumber

class User_model extends CI_Model {

    var $user_details = array();
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function user_details_get($user_id, $cache=true)
    {
        if( $user_id <=0 )
        {
            return false;
        }

        
        if( $cache and is_array($this->user_details) and sizeof($this->user_details)>0 )
        {
            log_message('DBG','get user details from cache:'. _var_dump($this->user_details));
            
            return $this->user_details;
        }


        $search = array(
            'user_id'=>$user_id
        );
        
        $result = $this->users_get(0, 1, null, null, $search);
        if( is_array($result) and sizeof($result)>0 and isset($result[$user_id]) )
        {
            
            $result = $result[$user_id];
            log_message('DEBUG','User details: '. _var_dump($result));
            if($cache == false and $user_id == user_id()){
                $this->user_details = $result;
            }
            return $result;
        }
        
        return false;
    }
    
    function email_is_uniq($email)
    {
        $email = safe_email($email);
        if( empty($email) or !check_email($email) )
        {
            return false;
        }
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('email',$email);
        $query = $this->db->get();
        if( $query->num_rows()>0 )
        {
            return false;
        }
        
        return true;
    }
    
    // delete from db
    function user_del($user_id)
    {
        $user_id = (int)$user_id;
        if( $user_id <=0 )
        {
            return false;
        }
        
        $this->db->where('id',$user_id);
        return $this->db->delete('users');
    }
    
    // set status 9
    function _user_del($user_id)
    {
        $user_id = (int)$user_id;
        if( $user_id <=0 )
        {
            return false;
        }
        
        return $this->user_details_set($user_id,array('user_status_id'=>9));
    }
    
    function password_recovery_hash_set($user_id,$hash)
    {
        $user_id = (int)$user_id;
        if( $user_id<=0 or empty($hash) )
        {
            log_message('ERROR',__FILE__.'@'.__LINE__);
            return false;
        }
        
        $CI = &get_instance();
        $timeout = (int)mktime()+(int)$CI->config->item('password_recovery_link_expired_interval');
        
        $this->db->set('user_id',$user_id);
        $this->db->set('hash',$hash);
        $this->db->set('timeout',date('Y-m-d H:i:s',$timeout));
        $result = $this->db->insert('user_password_recovery');
        
        if( $result )
        {
            return true;
        }    
        
        return false;
    }
    
    function password_recovery_hash_clear($user_id)
    {
        $user_id = (int)$user_id;
        if( $user_id<=0 )
        {
            log_message('ERROR',__FILE__.'@'.__LINE__);
            return false;
        }
        
        $this->db->where('user_id',$user_id);
        $result = $this->db->delete('user_password_recovery');
        
        if( $result )
        {
            return true;
        }    
        
        return false;
    }
    
    function user_id_by_recovery_hash($hash='')
    {
        if( empty($hash) )
        {
            log_message('ERROR',__FILE__.'@'.__LINE__);
            return false;
        }
        
        $this->db->select('user_id');
        $this->db->from('user_password_recovery');
        $this->db->where('hash',$hash);
        $this->db->where('UNIX_TIMESTAMP(`timeout`)>UNIX_TIMESTAMP(CURRENT_TIMESTAMP)',null, FALSE);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if( $query->num_rows() >0 )
        {
            $row = $query->row();
            return (int)$row->user_id;
        }
        
        
        return false;
    }
    
    
    function users_get($start, $items_per_page, $order_by, $order, $search, $total = false)
    {
        $users = array();
        
        if( $total )
        {
           $this->db->select('COUNT(u.id) as num_results'); 
        }
        else
        {
            $this->db->select('
            u.id,
            u.email,
            u.email as user_email,
            u.password,
            u.language_id,
            UNIX_TIMESTAMP(u.create_time) as create_time,
            u.balance,
            u.admin,
            u.session_id,
                     
            l.code3 as language_code,
	
            c.name as country_name,
            
            d.country_id,
            d.name,
            d.name as user_name,
            d.lastname,                      
            d.help_city_id, 
            d.sex,
            d.birthdate,
            d.marital_status,
            d.education,
            d.about_me   
            ');
        }
        
        $this->db->from('users u');
        $this->db->join('user_details d','u.id=d.user_id','left');
        $this->db->join('languages l','u.language_id=l.id','left');
        $this->db->join('countries c','d.country_id=c.id','left');
                       
                
        if( is_array($search) and sizeof($search)>0 )
        {
            $key = 'user_id';
            if( isset($search[$key]) )
            {
                $value = $search[$key];
                $this->db->where('d.'.$key,$value);
            }
            
            $key = 'email';
            if( isset($search[$key]) )
            {
                $value = $search[$key];
                $this->db->where('u.'.$key,$value);
            }
            /*
            $key = 'parent_id';
            if( isset($search[$key]) )
            {
                $value = $search[$key];
                $this->db->where('u.'.$key,$value);
            }
            
            $key = 'deleted_hide';
            if( isset($search[$key]) and $search[$key] == true )
            {
                $value = $search[$key];
                $this->db->where('`d`.`user_status_id`!=9',null,FALSE);
            }
            */
            /*
            $key = 'user_status_id';
            if( isset($search[$key]) )
            {
                $value = $search[$key];
                $this->db->where('d.'.$key,$value);
            }
            
             */ 
                          
             /*
            $key = 'plan_id';
            if( isset($search[$key]) and !empty($search[$key]) )
            {
                $value = (int)$search[$key];
                $this->db->where('sb.'.$key,$value);
            }
            */
        }
        
        switch( $order_by )
        {
            case "create_time":
                $order_by = 'u.create_time';
                break;
            
            case "name":
                $order_by = 'd.name';
                break;
            
            default:
                $order_by = 'u.id';
        }
        if( !in_array($order,array('asc','desc')) )
        {
            $order = 'asc';
        }
        $this->db->order_by($order_by,$order);
        
        if( !$total and $items_per_page>0 )
        {
            $this->db->limit(intval($items_per_page),intval($start));
        }
        
        $query = $this->db->get();
        
        if( $total )
        {
            $results = $query->row();
            return intval($results->num_results);
        }
        
        if( $query->num_rows()>0 )
        {
            $results = $query->result_array();
            foreach( $results as $key=>$value )
            {
                $users[$value['id']] = $value;
            }
            
            return $users;
        }
        
        return false;
    }
    
    function user_create($email, $password, $details=array())
    {
        $email = safe_email($email);
        
        $CI = &get_instance();
        
        $this->db->set('email',$email);
        $this->db->set('password',$password);
        $this->db->set('admin',0);
        $this->db->set('create_time', date('Y-m-d H:i:s'));
        $this->db->set('language_id', LANGUAGE_ID );
        $this->db->set('session_id',$CI->session->userdata('session_id'));

        $this->db->insert('users');
        
        if( $this->db->affected_rows() <= 0 )
        {
            return false;
        }
        
        $user_id = $this->db->insert_id();
        
        if( $user_id <=0 )
        {
            return false;
        }
        
        $details['user_id'] = $user_id;
        //$details['language_id'] = LANGUAGE_ID;
        $this->db->insert('user_details',$details);
        if( $this->db->affected_rows() <= 0 )
        {
            return false;
        }
        
        return $user_id;
    }
    
    function user_session_refresh($user_id)
    {
        $CI = &get_instance();
        $this->db->set('session_id',$CI->session->userdata('session_id'));
        $this->db->where('id',$user_id);
        $this->db->update('users');
        if( $this->db->affected_rows() !== false )
        {
            return true;
        }
        
        return false;
    }
    
    function user_details_set($user_id,$details)
    {
        $user_id = intval($user_id);
        if( $user_id <=0 )
        {
            return false;
        }
        
        $this->db->where('user_id',$user_id);
        $result = $this->db->update('user_details',$details);
        if( $result )
        {
            return true;
        }
        
        return false;
    }
    
    function user_password_set($user_id,$password)
    {
        $user_id = intval($user_id);
        if( $user_id <=0 )
        {
            log_message('ERROR',__FILE__.'@'.__LINE__);
            return false;
        }
        
        if( empty($password) )
        {
            log_message('ERROR',__FILE__.'@'.__LINE__);
            return false;
        }
        
        $this->db->set('password',$password);
        $this->db->where('id',$user_id);
        $result = $this->db->update('users');
        if( $result )
        {
            return true;
        }
        
        return false;
    }
    
    function user_detail_set($user_id,$key,$value)
    {
        $user_id = intval($user_id);
        if( $user_id <=0 )
        {
            log_message('ERROR',__FILE__.'@'.__LINE__);
            return false;
        }
        
        if( empty($key) )
        {
            log_message('ERROR',__FILE__.'@'.__LINE__);
            return false;
        }
        
        $this->db->set($key,$value);
        $this->db->where('user_id',$user_id);
        $result = $this->db->update('user_details');
        if( $result )
        {
            return true;
        }
        
        return false;
    }
    
}
?>