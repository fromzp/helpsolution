<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_profile extends CI_Controller
{
    function Index()
    {
        
        if( !auth_check() )
        {
            auth_error();
            return false;
        }
               
       
            $this-> _edit_details();
        
    }
      
    
    function _edit_details()
    {
        
        $user_id = user_id();
        $user_details = user_details();         
        $data = array();      
        $data['user_details'] = $user_details;        
        _view('frontend/my/view_my_profile_details_edit',$data);
        
    }   
   
    
    
    
}
