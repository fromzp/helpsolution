<?php
require_once(APPPATH.'third_party/fb.php');
function fb()
{
    $instance = FirePHP::getInstance(true);
  
    $args = func_get_args();
    return call_user_func_array(array($instance,'fb'),$args);
}
?>
