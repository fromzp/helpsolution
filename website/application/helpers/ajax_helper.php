<?php
function make_json_answer($status, $data=array(),$json=true)
{
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    if( $json )
    {
        header('Content-type: application/json');
    }
    
    if( is_array($data) and !isset($data['msg']) )
    {
        $data['msg'] = '';
    }
    
    if( !is_array($data) )
    {
        $data = array('msg'=>$data);
    }
    
    $data['msg'] = replace_lang($data['msg']);
    $answer = array(
        'status'=>(int)$status,
        'msg'=>$data['msg'],
        'params'=>$data
    );

    unset($answer['params']['msg']);
    
    $json = json_encode($answer);

    echo $json;
    exit(0);
}


/*
 * For jQuery plugin `validate`
 * error messages block
 * types:
   required: "This field is required.", 
   remote: "Please fix this field.",
   email: "Please enter a valid email address.",
   url: "Please enter a valid URL.",
   date: "Please enter a valid date.",
   dateISO: "Please enter a valid date (ISO).",
   number: "Please enter a valid number.",
   digits: "Please enter only digits.",
   creditcard: "Please enter a valid credit card number.",
   equalTo: "Please enter the same value again.",
   accept: "Please enter a value with a valid extension.",
   maxlength: $.validator.format("Please enter no more than {0} characters."),
   minlength: $.validator.format("Please enter at least {0} characters."),
   rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
   range: $.validator.format("Please enter a value between {0} and {1}."),
   max: $.validator.format("Please enter a value less than or equal to {0}."),
   min: $.validator.format("Please enter a value greater than or equal to {0}.")
 */
function json_error_make($type='required',$params = array())
{
    return array('type'=>$type,'params'=>$params);
}

function put_json_answer($json)
{
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Content-type: application/json');

    echo $json;
    exit(0);
}

?>
