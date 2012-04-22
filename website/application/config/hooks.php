<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/


$hook['post_controller_constructor'] = array(
                                'class'    => '',
                                'function' => 'pre_config',
                                'filename' => 'post_controller_constructor.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );

$hook['display_override'] = 
array
(
                                'class'    => '',
                                'function' => 'display_hook',
                                'filename' => 'display_override.php',
                                'filepath' => 'hooks',
                                'params'   => array()
);


/* End of file hooks.php */
/* Location: ./application/config/hooks.php */