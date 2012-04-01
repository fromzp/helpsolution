<?php

function display_hook()
{
    $CI = &get_instance();
    $output = $CI->output->get_output();
    echo replace_lang($output);
}

?>