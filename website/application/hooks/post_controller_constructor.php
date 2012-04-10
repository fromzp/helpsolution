<?php

function pre_config()
{

    
    mb_internal_encoding('UTF-8');
    if( ENVIRONMENT == 'development' )
    {
        ini_set('display_errors','1');
        error_reporting(E_ALL);
    }
    
    
    // get_object
    $CI = &get_instance();
    if( $CI->uri->segment(1) == 'get_object'){
        log_message('DEBUG',__FILE__.'@'.__LINE__.": not get_object request-> hook language");
        define('OBJECT_REQUEST',TRUE);
    }
    
    hook_language();
    
    /** REDIRECTS SECTION */
    
    // no need to see homepage when you are logged in
    if( auth_check() )
    {

    }
    /** END OF REDIRECTS SECTION */
}

function hook_language()
{
    log_message('DEBUG',__FILE__.'@'.__LINE__.": ______________________________________ hook language start");
    $CI = &get_instance();
    $CI->load->model('language_model');
    
    $language_id = intval(0);
    
    $language_id = hook_language_user_agent();
    log_message('DEBUG',__FILE__.'@'.__LINE__.": language_id (user agent): ". $language_id);
    $language_id = hook_language_request($language_id);
    log_message('DEBUG',__FILE__.'@'.__LINE__.": language_id (userdata): ". $language_id);
    
    $languages = $CI->language_model->language_get_all();
    $languages_all = $CI->language_model->language_get_all(false);
    
    if( $language_id<=0 or !isset($languages[$language_id]) )
    {
        log_message('DEBUG',__FILE__.'@'.__LINE__.": language_id (get default): ". $language_id);
        $language_id = $CI->language_model->language_id_get_default();
    }
    
    if( $language_id<=0 )
    {
        log_message('DEBUG',__FILE__.'@'.__LINE__.": language_id=1: ". $language_id);
        $language_id = 1;
    }
    
    $language = $languages_all[$language_id];
    
    
    if(!defined('LANGUAGE_ID'))
    {
        define('LANGUAGE_ID',$language_id);
    }
    if(!defined('LANGUAGE_CODE'))
    {
        define('LANGUAGE_CODE',$language['code']);
    }
    if(!defined('LANGUAGE_CODE2'))
    {
        define('LANGUAGE_CODE2',$language['code2']);
    }
    log_message('DEBUG',__FILE__.'@'.__LINE__.'LANGUAGE_ID: '. LANGUAGE_ID ."; LANGUAGE_CODE: ". LANGUAGE_CODE ."; LANGUAGE_CODE2: ". LANGUAGE_CODE2);
    log_message('DEBUG',__FILE__.'@'.__LINE__.": HTTP_ACCEPT_LANGUAGE: ". isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])?$_SERVER['HTTP_ACCEPT_LANGUAGE']:'undefined');
    log_message('DEBUG',__FILE__.'@'.__LINE__.": userdata: ". $CI->session->userdata('language_id'));
    
    $result =  $CI->language_model->language_id_set($language_id);
    log_message('DEBUG',__FILE__.'@'.__LINE__.": language_id (". $language_id.") set_result: ". (int)$result);
    log_message('DEBUG',__FILE__.'@'.__LINE__.": ______________________________________ hook language stop");
    return;
}

function hook_language_request($language_id='')
{
    $CI = &get_instance();
    $_language_id = $CI->session->userdata('language_id');
    if( !empty($_language_id) )
    {
        log_message('DEBUG',__FILE__.'@'.__LINE__.": userdata language_id: ". $_language_id);
        $language_id = $_language_id;
    }
    
    return $language_id;
}

function hook_language_user_agent($language_id=''){
    $CI = &get_instance();
    $language_id = intval($language_id);
    $CI->load->model('language_model');
   
    
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
        
        
        $matches = array();
        if(!preg_match('/^[,]?([a-z]{2})(\-[a-z]{2})?(;[q-z]{1}\=[0-9.])?[,]?/i',$_SERVER['HTTP_ACCEPT_LANGUAGE'],$matches)){
            log_message('DEBUG',__FILE__.'@'.__LINE__.": matches not found, HTTP_ACCEPT_LANGUAGE: ". $_SERVER['HTTP_ACCEPT_LANGUAGE']);
            return $language_id;
        }
        
        $accept_lang = $matches[1];
        
        // get language_id by code2
        $_language_id = $CI->language_model->language_get_id_by_code2($accept_lang,true);
        if( (int)$_language_id > 0 ){
            log_message('DEBUG',__FILE__.'@'.__LINE__.": language from user agent: (".$accept_lang.") ". $_language_id);
            return $_language_id;
        }
        
        log_message('DEBUG',__FILE__.'@'.__LINE__.": accept_lang: ". $accept_lang);
        log_message('DEBUG',__FILE__.'@'.__LINE__.": HTTP_ACCEPT_LANGUAGE: ". $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    }
    
    return $language_id;
}

?>