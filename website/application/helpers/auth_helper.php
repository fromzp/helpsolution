<?php

function auth_check()
{
    $CI = &get_instance();
    $CI->load->model('auth_model');
    
    return $CI->auth_model->auth_check();
}

function admin_check()
{
    $CI = &get_instance();
    $CI->load->model('auth_model');
    
    return $CI->auth_model->admin;
}

function subscription_active_check()
{
    
    if( admin_check() )
    {
        return true;
    }
    
    $CI = &get_instance();
    $CI->load->model('subscription_model');
    
    $user_id = user_id();
    if( subuser_check() )
    {
        $user_id = (int)user_details('parent_id');
    }
    
    if( $CI->subscription_model->get_active($user_id) )
    {
        return true;
    }
    
    log_message('ERROR',__FILE__.'@'.__LINE__);
    return false;
}


function subuser_check()
{
    
    $parent_id = (int)user_details('parent_id');
    if( $parent_id > 0)
    {
        return true;
    }
    return false;
}

function auth_error()
{
    $data = array();
    _view('frontend/error/auth_error',$data);
}

function subscr_error()
{
    $title = 'Your subscription was expired.';
    $msg = 'Please renew subscription to use service.';
    return put_error($title,$msg);
}

function user_id()
{
    $CI = &get_instance();
    $CI->load->model('auth_model');
    
    return $CI->auth_model->user_id();
}

/**
 * When we need a parent-user access (like froms list for example)
 * 
 */

function parent_id($user_id='')
{
    $user_id = (int)$user_id;
    $cache = false;
    if($user_id <=0 )
    {
        $cache = true;
        $user_id = user_id();
    }
   
   $parent_id = (int)user_details('parent_id',$user_id,$cache);
   log_message('DEBUG',__FILE__."@".__LINE__.": user_id: ". $user_id ."; parent_id: ". $parent_id);
   if( $parent_id > 0 ) 
   {
       return $parent_id;
   }
   
   return $user_id;
       
}

function user_details($item='', $user_id=0, $cache=true)
{
    if( $user_id <=0 )
    {
        $user_id = user_id();
    }
    
    $CI = &get_instance();
    $CI->load->model('user_model');
    $user_details = $CI->user_model->user_details_get($user_id,$cache);
    fb($user_details,'auth_helper_114 line user_details');
    if( empty($item) )
    {
        return $user_details;
    }
    
    if( isset( $user_details[$item]) )
    {
        return $user_details[$item];
    }
    
    return false;
}

function get_auth_block()
{
    $data = array();
    return _view('common/view_auth_block', $data, true);
}

?>