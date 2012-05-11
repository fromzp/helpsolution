<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Registration extends CI_Controller
{
    
    public function Index()
    {
 
        if( auth_check() )
        {
            // active user don't allow to the registration process
            if( (int)user_details('user_status_id')!=0 )
            {
                redirect('my/profile');
                exit(0);
            }
        }
        
        $this->load->helper('recaptchalib');   
       
      $data = array();
        
     if ( !empty($_POST['who_join']) ) {
         $data['who_join']=$_POST['who_join'];
     } else {
        $data['who_join']="";
        _view('view_registration',$data);
     }
    }
    
    /*
    function plans()
    {
        if( !auth_check() )
        {
            redirect(site_url('registration'));
            return true;
        }
        

        // active user don't allow to the registration process
        if( (int)user_details('status_id')!=0 )
        {
            redirect('my/profile');
            exit(0);
        }

        
        $this->load->model('plan_model');
        $search = array(
            'status_id'=>1
        );
        $plans = $this->plan_model->plans_get($search);
        
        $data = array('plans'=>$plans);
        _view('frontend/registration/plans',$data);
    }
    */
    
    
    
    function details()
    {
        if( !auth_check() )
        {
            redirect(site_url('registration'));
            return true;
        }
        
         // active user don't allow to the registration process
        if( (int)user_details('user_status_id')!=0 )
        {
            redirect('my/profile');
            exit(0);
        }
        
        $this->load->model('user_model');
        //$this->load->model('plan_model');
        
        $user_id = user_id();
        $user_details = $this->user_model->user_details_get($user_id);

        $data = array(
            'user'=>$user_details
        );
        _view('frontend/registration/details',$data);
    }
    
    /*
    function billing()
    {
        if( !auth_check() )
        {
            redirect(site_url('registration'));
            return true;
        }
        
        // active user don't allow to the registration process
        if( (int)user_details('user_status_id')!=0 )
        {
            redirect('my/profile');
            exit(0);
        }
        
        $this->load->model('user_model');
        $this->load->model('plan_model','plan');
        $this->load->model('subscription_model','subscription');
        
        $user_id = user_id();
        
        // check if user has subscription awaiting payment
        $subscription = $this->subscription->next_to_paid($user_id);
        if( !is_array($subscription) or sizeof($subscription)<=0 )
        {
            redirect('registration/plans');
            return false;
        }
        
        $plan_details = $this->plan->plan_details_get($subscription['plan_id']);
        
        $data = array(
            'plan'=>$plan_details
        );
        _view('frontend/registration/billing',$data);
    }
    */
}



?>