<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Validation extends CI_Controller
{
    
    public function Index()
    {
        return false;
        
    }
    
    public function email_check()
    {
        $email = safe_email($this->input->get('email'));
        if( !check_email($email) )
        {
            put_json_answer('false');
        }
    
        $this->load->model('user_model');
        if( $this->user_model->email_is_uniq($email) )
        {
            put_json_answer('true');
        }
        
        put_json_answer('false');
    }
    
}



?>