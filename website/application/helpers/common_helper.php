<?php

function objects_merge($default, $objects=array())
{

    if( !is_array($objects) or sizeof($objects)<=0 )
    {
        if( !is_array($default) or sizeof($default)<=0 )
        {
            return array();
        }
        return $default;
    }

    $result_array = $default;
    foreach( $objects as $object )
    {
        $isset = false;
        foreach( $result_array as $def )
        {
            if( sizeof(array_diff($object,$def))<=0 )
            {
                $isset = true;
                break;
            }
        }
        if( !$isset )
        {
            $result_array[] = $object;
        }
    }
    return $result_array;
}


function pagination_count($current_page=0, $items_per_page=0 )
{
    $start = 0;
    
    if( $current_page<=0)
    {
        $start = 0;
    }
    else
    {
        $start = $current_page * $items_per_page;
    }
    
    return (int)$start;
}

function ip_address()
{
    $CI = &get_instance();
    return $CI->input->ip_address();
}

function get_date($timestamp, $time=false, $format='')
{
    if( empty($format) )
    {
        $format = 'M d Y';
        if( $time )
        {
            $format .= ' H:i:s';
        }
    }
    
    
    
    if( empty($timestamp) )
    {
        return date($format);
    }
    
    return date($format,$timestamp);
}

function get_amount($amount,$currency=true)
{
    $CI = &get_instance();
    
    $sys_currency = $CI->config->item('system_currency_sign');
    $sys_currency_place = $CI->config->item('system_currency_place');
    //@doto print amount
    $amount = (float)$amount;
    $return =  sprintf("%.02f",$amount);
    
    if( $currency )
    {
        if( $sys_currency_place == 'left' )
        {
            $return = $sys_currency.$return;
        }
        else
        {
            $return = $return.$sys_currency;
        }
    }
    
    return $return;
}

    function make_pattern_style($fields)
    {
        if( !is_array($fields) or sizeof($fields)<=0 )
        {
            log_message('ERROR',__FILE__.'@'.__LINE__);
            return false;
        }
        
        $new = array();
        foreach( $fields as $name=>$value )
        {
            $new['{'.$name.'}'] = $value;
        }
        return $new;
    }

?>
