<?php

if ( ! function_exists('base64_url_encode'))
{
    function base64_url_encode($input)
    {
     	return strtr(base64_encode($input), '+/=', '-_,');
    }
}

if ( ! function_exists('base64_url_decode'))
{
    function base64_url_decode($input)
    {
        return base64_decode(strtr($input, '-_,', '+/='));
    }
}


function safe_chars($string, $add="", $len=1024)
{
    $res = mb_substr(ereg_replace("[^".$add."a-zA-Z0-9\ \._-]", "", trim($string)), 0, $len);
    $res = str_replace("\0","",$res);
    return $res;
}

function safe_email($email)
{
    $res = mb_substr(mb_ereg_replace("[^-a-zA-Z0-9_@\.]", "", trim($email)), 0, 128);
    $res = str_replace("\0","",$res);
    return $res;
}

function safe_md5($md5)
{
    $res = mb_substr(mb_ereg_replace("[^a-zA-Z0-9_]", "", trim($md5)), 0, 64);
    $res = str_replace("\0","",$res);
    return $res;
}
    
function check_email($email)
{
    if( mb_eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$",$email) != false )
    {
        return true;
    }
    return false;
}

function _var_dump($var,$return = true)
{
    return print_r($var,true);
    
    return false;
    ob_start();
    var_dump($var);
    $output = ob_get_contents();
    ob_clean();
    return $output;
}

function form_process_clean($str)
{
    $str = is_array($str) ? array_map("form_process_clean", $str) : str_replace('\\', '\\\\', strip_tags(trim(htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($str) : $str), ENT_QUOTES))));
    return $str;
}

function output($data)
{
    if( empty($data) )
    {
        return '';
    }
    $data = mb_substr($data,0,65535);
    return htmlspecialchars($data,ENT_QUOTES);
}

function pass_random($len, $num, $small, $upper)
  {

   if(($small+$num+$upper)==0)
    {
     return false;
    }   
   if($len>10) $len=10;

//   $uppers="WERQWEIJWEQNIRRCIQUWYRECTRRPIERRPHXCVMBNXNVCCCCCCFDUKHGFKLJERHTYPIEWRUUTFSDULKVGJHXCBMVBZXMBFGLQKSGFY";
//   $smalls="dbskuiqqqyasdgfkjcvmdzsfngerojkwitopqwyeruitasdjfhzxvcmnfoweptyoweupirotioqwerusqhdggggggfbqiwjheypkr";
//   $nums=  "79228347592364895642349785229348625998734456346763477698872394658436379825478225398723645983458767233";
  
   while(true)
    { 
     $zero=",fv,fh,bZ1975wsrtgoiuhkbm srg1235@$#%#$%^6711`][p][m,bnm,^^&& 0983445621kjhaskdlfhaofy  qwer qwer ``";
     $begin=microtime(true);
     $string=md5($zero.date("r").$zero);
     $array=preg_split("//", $string, -1, PREG_SPLIT_NO_EMPTY);
     sort($array);
     $string=md5(implode("", $array));
     ereg("[5-9]", $string, $j) || $j[0]=3;
     for($i=1; $i<=rand(3,10)+$j[0]; $i++)
      {
       $string=md5(md5(microtime(true).$string));
       $string=ereg_replace("[1]", "one", $string);
       $string=ereg_replace("[9]", "nine", $string);
       $string=ereg_replace("[^a-zA-Z]", "", crypt(substr($string, 10, 6)).crypt(substr($string, 1, 5)).crypt(substr($string, 8, 5)).crypt(substr($string, 15, 16)));
      }
     for($i=1; $i<=rand(3,10); $i++)
      {
       $pass=ereg_replace("[^0-9a-zA-Z]", "", crypt(md5($string).crypt(microtime(true)+$begin)));
      }
     if($num!==1)
      {
       $pass=ereg_replace("[0-9]", "", $pass);    
      }
     if($upper!==1)
      { 
       $pass=ereg_replace("[A-Z]", "", $pass);    
      }
     if($small!==1)
      { 
       $pass=ereg_replace("[a-z]", "", $pass);    
      }

     $pass=ereg_replace("[O01l]", "", $pass);    
     $pass=substr($pass,-$len);
     
     if(strlen($pass)<$len)
      {
       continue;
      }
     if($num===1 && !ereg("[0-9]", $pass))
      {
       continue;
      }
     if($upper===1 && !ereg("[A-Z]", $pass))
      {
       continue;
      }
     if($small===1 && !ereg("[a-z]", $pass))
      {
       continue;
      }
  
     return($pass); 
    }

}


?>