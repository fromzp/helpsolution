<?php
function replace_lang($output)
{
    list($_start_msec, $_start_sec) = explode(" ",microtime());
    $CI = &get_instance();
    $CI->load->model('language_model');

    $language_id = $CI->language_model->language_id_get();
    $language_default_id = $CI->language_model->language_id_get_default();
    
    if( $language_id <=0 or $language_default_id <=0)
    {
        log_message('ERROR',__FILE__."@".__LINE__.": language_id is not set");
        return false;
    }

    $all=array();
    //log_message('DEBUG',"\n\n############### START OF OUTPUT TO REPLACE_LANG ################\n". $output . "\n############### END OF OUTPUT TO REPLACE_LANG ################\n\n");
    if( preg_match_all('/\<\{(.*?)\}\>/', $output, $all) !== 0 )
    {
        //log_message('DEBUG',_var_dump($all));

        $keys = '';
        $z = 0;
        foreach( $all[1] as $_key )
        {
            if( $z >0 ){
                $keys .=", ";
            }
            $keys .= '"'. addslashes($_key) .'"';
            $z++;
        }
        //$keys='"'.@join('", "', $all[1]).'"';

        $sql = "
        SELECT `LK`.`key_name`, IF(`LV`.key_value!='' AND `LV`.key_value IS NOT NULL,`LV`.`key_value`,`LVD`.`key_value`) as key_value
        FROM `language_keys` LK
        LEFT JOIN `language_values` LVD ON (`LVD`.`language_key_id`=`LK`.`id` AND `LVD`.`language_id`='". $language_default_id ."')
        LEFT JOIN `language_values` LV ON (`LV`.`language_key_id`=`LK`.`id` AND `LV`.`language_id` = '". $language_id ."' )
        WHERE `LK`.`key_name` IN (". mb_strtolower($keys).")
        ";
        
        $res = $CI->db->query($sql);

        if($res->num_rows())
        {
            $replaced=array();

            foreach($res->result_array() as $content)
            {
                $replaced['<{'. $content['key_name'] .'}>']=$content['key_value'];
            }
        }

        list($_stop_msec, $_stop_sec) = explode(" ",microtime());
        $query_time = round(((float)$_stop_sec+round(floatval($_stop_msec),3)) - ((float)$_start_sec+round(floatval($_start_msec),3)),3);
        log_message('DEBUG',__FILE__.'@'.__LINE__.": REPLACE_LANG MARK 1 TIME: ". $query_time);
        
        // use additional parameters
        $args = array();
        $num_args = func_num_args();
        if( $num_args > 1 )
        {
            $args = func_get_args();
            $args = array_slice($args,1);
        }
        
        $all_replaced = array();
        foreach( $all[1] as $constant_name )
        {
            // AUTO CREATE CONSTANT!!!
            if( $CI->config->item('use_language_keys_auto_add') == true )
            {
                //@doto use with care!
                //maybe need to be disabled for live system
                if( !empty($constant_name) )
                {
                    $CI->language_model->key_touch($constant_name);
                }
            }
            
            
            
            if( isset($replaced['<{'.mb_strtolower($constant_name).'}>']) )
            {
                $result['<{'.$constant_name.'}>'] = vsprintf($replaced['<{'.mb_strtolower($constant_name).'}>'],$args);
            }
            else
            {
                $result['<{'.$constant_name.'}>'] = vsprintf($constant_name,$args);
            }
        }
        
        list($_stop_msec, $_stop_sec) = explode(" ",microtime());
        $query_time = round(((float)$_stop_sec+round(floatval($_stop_msec),3)) - ((float)$_start_sec+round(floatval($_start_msec),3)),3);
        log_message('DEBUG',__FILE__.'@'.__LINE__.": REPLACE_LANG MARK 2 TIME: ". $query_time);

        $output=@strtr($output, $result);

    }
    else
    {
        log_message('DEBUG',__FILE__."@".__LINE__.": language constants not found on this page");
    }

    list($_stop_msec, $_stop_sec) = explode(" ",microtime());
    $query_time = round(((float)$_stop_sec+round(floatval($_stop_msec),3)) - ((float)$_start_sec+round(floatval($_start_msec),3)),3);
    log_message('DEBUG',__FILE__.'@'.__LINE__.": REPLACE_LANG TIME: ". $query_time);
    
    if( $query_time > 2 )
    {
        log_message('ERROR',__FILE__.'@'.__LINE__.": REPLACE_LANG TIME: ". $query_time."; OUTPUT: ". mb_substr($output, 0, 100));
    }
    
    
    return $output;

}
?>
