<?php

$CI = &get_instance();
$aliases = $CI->config->item('func_aliases');
log_message('DEBUG','need to create a new function aliases: '. _var_dump($aliases));

foreach($aliases as $alias=>$func)
{
    log_message('DEBUG','trying to create new function alias: '. $alias);
    create_function_alias($func, $alias);
}


function create_function_alias($function_name, $alias_name)
{
    if(function_exists($alias_name))
        return false;
    $rf = new ReflectionFunction($function_name);
    $fproto = $alias_name.'(';
    $fcall = $function_name.'(';
    $need_comma = false;
   
    foreach($rf->getParameters() as $param)
    {
        if($need_comma)
        {
            $fproto .= ',';
            $fcall .= ',';
        }

        $fproto .= '$'.$param->getName();
        $fcall .= '$'.$param->getName();

        if($param->isOptional() && $param->isDefaultValueAvailable())
        {
            $val = $param->getDefaultValue();
            if(is_string($val))
            {
                $val = "'$val'";
            }
            elseif( is_array($val) )
            {
                $val = "array()";
            }
            $fproto .= ' = '.$val;
        }
        $need_comma = true;
    }
    $fproto .= ')';
    $fcall .= ')';

    $f = "function $fproto".PHP_EOL;
    $f .= '{return '.$fcall.';}';

    
    log_message('DEBUG','create a new function: '.$f);
    eval($f);
    return true;
}

?>
