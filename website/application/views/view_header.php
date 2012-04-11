<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<title><?php echo $title; ?></title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> 

<script type="text/javascript">
var base_url='<?php echo base_url(); ?>';
</script>

<?php
if( isset($objects) )
{
    echo $objects;
}
?>
</head>
<body>
      
<!-- header -->
<div class="header"> 
    <div class="header_logo">      	
        <div><a href="<?php echo base_url(); ?>" class="logo_img"></a></div>
    </div>

    <div class="header_menu">
        <div class ="panel">
            <div class="flag"></div>
            <div class="select_">
                <?php
                if( isset($opt_language_menu) )
                {
                    echo $opt_language_menu; 
                } 
                ?>
            </div>
            <div class="registration_button"><a href="registration">Реєстрація</a></div>
            <div class="login_button"><a href="<?php echo base_url(); ?>">Увiйти</a></div>
        </div>
        <div class="menus">

            <div class="li"><a class="clear_link" href="can_help">Я МОЖУ ДОПОМОГТИ</a> <div class="black_line"></div></div>
            <div class="li "><a class="clear_link" href="need_help">ПОТРIБНА ДОПОМОГА</a> <div class="black_line"></div></div>
            <div class="li small"><span><a class="clear_link" href="about_us">ПРО НАС</a></span><div class="black_line"></div></div>

        </div>
    </div>

    <div class="header_line">  </div>
</div>
</
<!-- header end-->

    
    
    