<?php
$config['captcha_key_private'] = '6LdOHscSAAAAAOqMn0c_OtFZ-qC-H0qhgLaWXKmr';
$config['captcha_key_public'] = '6LdOHscSAAAAACDOyf_qdV0lPvAdVA6xV1f8Mx35';

// function aliases
// for details see alias_helper
$config['func_aliases'] = array(
    '_img'=>'get_img_src',
    '_jerr'=>'json_error_make'
);

$config['upload_path'] = getcwd().'/upload/';
$config['upload_max_filesize'] = 1024*18; //in KB
$config['upload_image_max_width'] = ''; //in px or leave empty
$config['upload_image_max_height'] = ''; //in px or leave empty

$config['system_currency'] = 'USD';
$config['system_currency_sign'] = '$';
$config['system_currency_place'] = 'left'; //right


$config['email_sys_debug_email'] = 'dbg@donin.net'; //copy all email's

$config['email_sys_from_email'] = 'no-reply@gbksoft.com';
$config['email_sys_from_name'] = 'GBKSoft mail system';

$config['email_sys_reply_to_email'] = 'no-reply@gbksoft.com';
$config['email_sys_reply_to_name'] = 'GBKSoft mail system';

$config['password_recovery_link_expired_interval'] = 3600*24*3; // 3 days

//Use with care! DB 
$config['use_language_keys_auto_add'] = true; // false | true 
?>
