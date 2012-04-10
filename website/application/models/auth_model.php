<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once getcwd()."/application/models/user_model.php";

class Auth_model extends User_Model {

    var $user_id = 0;
    var $admin = false;
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        
        if ( $this->auth_check() )
        {
            $details = $this->user_details_get($this->user_id);
            
            if( isset($details['admin']) and $details['admin'] == 1 )
            {
                $this->admin = true;
            }
            
            // update session_id
            $this->user_session_refresh($this->user_id);
            
            log_message('DEBUG','admin: '. (int)$this->admin);
        }
        
    }
 
    function user_id()
    {
        if( $this->user_id >0 )
        {
            return $this->user_id;
        }
        
        return false;
    }
    
    function auth_check()
    {
        $user_id = $this->session->userdata('user_id');
        if( $user_id >0 )
        {
            $this->user_id = $user_id;
            return true;
        }
        
        // update session_id into users
        
        return false;
    }
    
    function auth_set($user_id,$admin=false)
    {
        if( $user_id<=0 )
        {
            return false;
        }
        
        // set user_id into user session
        $this->session->set_userdata('user_id',$user_id);
        
        // set user_id into user_model
        $this->user_id = $user_id;
        
        //set admin mode
        if( $admin )
        {
            $this->admin = true;
        }
        
        return true;
    }
    
    function login($email, $password)
    {
        $this->db->select('u.id,u.admin');
        $this->db->from('users u');
        $this->db->join('user_details d','u.id=d.user_id','left');
        $this->db->where('u.email',$email);
        $this->db->where('u.password',$password);
        $this->db->where('`d`.`user_status_id` != ',9, false);
        $this->db->limit(1);
        
        $query = $this->db->get();

        if( $query->num_rows()>0 )
        {
            $row =  $query->row();
            return array($row->id,(bool)$row->admin);
        }
        
    }
    
    function auth_unset()
    {

        // unset user_id into user session
        $this->session->unset_userdata('user_id');
        
        // unset user_id into user_model
        $this->user_id = 0;
        
        return true;
    }
    
}
?>
