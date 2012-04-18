<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language_model extends CI_Model {

    var $default_language_id = null;
    var $languages_all = array();
    var $languages_all_active = array();
    var $language_id = null;
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function language_id_get()
    {
        if( intval($this->language_id) > 0 )
        {
            return (int)$this->language_id;
        }
        
        if( defined('LANGUAGE_ID') )
        {
            return LANGUAGE_ID;
        }
        
        log_message('ERROR',__FILE__."@".__LINE__.": LANGUAGE_ID is not defined");
        return 1; //eng
    } 
   
    function language_id_set($language_id)
    {
        $CI = &get_instance();
        $CI->session->set_userdata('language_id',(int)$language_id);
        if( (int)$CI->session->userdata('language_id') == (int)$language_id )
        {
            $this->language_id = (int)$language_id;
           
            return true;
        }
        return false;
    }
    
    function language_id_get_default()
    {
        if( $this->default_language_id > 0 )
        {
            return $this->default_language_id;
        }
        
        $this->db->select('id');
        $this->db->from('languages');
        $this->db->where('default',1);
        
        $query = $this->db->get();
        if( $query->num_rows() >0 )
        {
            $row = $query->row();
            $id = (int)$row->id;
            
            $this->default_language_id = $id;
            return $this->default_language_id;
        }
        
        log_message('ERROR','default language is not set!');
        return 1; //default eng;
    }
    
    
    function language_status_set($language_id,$status)
    {
        $language_id = (int)$language_id;
        $status = (int)$status;
        
        if( $language_id<=0 )
        {
            return false;
        }
        
        $this->db->set('active',$status);
        $this->db->where('id',$language_id);
        $result = $this->db->update('languages');
        if( $result )
        {
            return true;
        }
        return false;
    }
    
    function language_get_all($active=true)
    {   
        
        if( $active )
        {
            $cache_array = & $this->languages_all_active;
        }
        else
        {
            $cache_array = & $this->languages_all;
        }
            if( sizeof($cache_array)>0)
            {
                log_message('DEBUG','languages_get_all: cache');
                return $cache_array;
            }
        
        $this->db->select('id, code3 as code, code3, code2, active, default');
        $this->db->from('languages');
        if( $active )
        {
            $this->db->where('active',1);
        }
        
        $query = $this->db->get();
        if( $query->num_rows()>0 )
        {
            $languages = array();
            foreach( $query->result_array() as $key=>$value )
            {
                $languages[$value['id']] = $value;
            }
            $cache_array = $languages;
            log_message('DEBUG','languages_get_all: db');
            return $languages;
        }

        log_message('ERROR','There are no active languages!');
        return false;
    }
    
    function language_get_id_by_code3($code3)
    {
        $languages = $this->language_get_all(false);

        foreach($languages as $language_id=>$language )
        {
            if( $code3 == $language['code3'] )
            {
                return $language_id;
            }
        }
        log_message('ERROR',__FILE__.'@'.__LINE__);
    }
    
    function language_get_id_by_code2($code2,$active=false)
    {
        $languages = $this->language_get_all($active);

        foreach($languages as $language_id=>$language )
        {
            if( $code2 == $language['code2'] )
            {
                return $language_id;
            }
        }
    }
    
    function key_touch($key)
    {
        $key = trim($key);
        if( empty($key) )
        {
            return false;
        }
        
        if( !$this->key_exists($key) )
        {
           $this->db->set('key_name',mb_strtolower($key));
           if( $this->db->insert('language_keys') )
           {
            return (int)$this->db->insert_id();
           }
        }
        
        return false;
    }
    
    function value_touch($language_id, $key_id, $value)
    {
        if( $language_id<=0 or $key_id<=0 )
        {
            log_message('ERROR',__FILE__.'@'.__LINE__);
            return false;
        }
        
        if( !$this->value_exists($language_id, $key_id, $value) )
        {
           $this->db->set('language_key_id',$key_id);
           $this->db->set('language_id',$language_id);
           $this->db->set('key_value',$value);
           return $this->db->insert('language_values');
        }
        else
        {
           $this->db->set('key_value',$value);
           $this->db->where('language_key_id',$key_id);
           $this->db->where('language_id',$language_id);
           return $this->db->update('language_values');
        }
        
        return false;
    }
    
    function value_exists($language_id, $key_id, $value)
    {
        $this->db->select('id');
        $this->db->from('language_values');
        $this->db->where('language_id',$language_id);
        $this->db->where('language_key_id',$key_id);
        $query = $this->db->get();
        
        if( $query->num_rows() >0 ) 
        {
            return true;
        }
        
        return false;
    }
    
    function key_exists($key)
    {
        if( empty($key) )
        {
            return false;
        }
        
        $count = (int)$this->keys_get($search=array('key_name'=>mb_strtolower($key)), $start=0, $items_per_page=1, $order_by=null, $order=null, $total = true);
        return $count>0?true:false;
    }
    
    function values_get($key_id)
    {
        $key_id = (int)$key_id;
        if( $key_id <=0 )
        {
            return true;
        }
        
        $this->db->select('
            v.id,
            v.key_value,
            v.language_id
            ');
        $this->db->from('language_values v');
        $this->db->where('language_key_id', $key_id);
        $query = $this->db->get();
        
        $values = array();
        if( $query->num_rows()>0 )
        {
            $results = $query->result_array();
            foreach( $results as $key=>$value )
            {
                $values[$value['language_id']] = $value['key_value'];
            }
            
            return $values;
        }
        
        return false;
        
    }
    
    function key_get_by_id($key_id)
    {
        $key_id = (int)$key_id;
        
        $key = $this->keys_get($search=array('id'=>$key_id), $start=0, $items_per_page=1, $order_by=null, $order=null, $total = false);
        if( is_array($key) and sizeof($key)>0 )
        {
            return $key[$key_id]['key_name'];
        }
        return false;
    }
    
    function keys_get($search, $start=null, $items_per_page=null, $order_by=null, $order=null, $total = false)
    {
        $keys = array();
        
        if( $total )
        {
           $this->db->select('COUNT(k.id) as num_results'); 
        }
        else
        {
            $this->db->select('
            k.id,
            k.key_name
            ');
        }
        
        $this->db->from('language_keys k');
        
        
        if( is_array($search) and sizeof($search)>0 )
        {
            $key = 'id';
            if( isset($search[$key]) )
            {
                $value = $search[$key];
                $this->db->where('k.'.$key,$value);
            }
            
            $key = 'key_name';
            if( isset($search[$key]) )
            {
                $value = $search[$key];
                $this->db->where('k.'.$key,$value);
            }
        }
        
        switch( $order_by )
        {
            default:
                $order_by = 'k.key_name';
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
                $keys[$value['id']] = $value;
            }
            
            return $keys;
        }
        
        return false;
    }
    
}
// END Language_model class

/* End of file Language_model.php */
/* Location: ./system/application/models/language_model.php */