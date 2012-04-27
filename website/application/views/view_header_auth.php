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
        if (isset($objects)) {
            echo $objects;
        }
        ?>
    </head>
    <body class="body">

        <!-- header -->
        <div class="header"> 


            <div class="header_logo">      	

            </div>
            
<?php echo get_navigator_auth(); ?>
            </div>
        <!-- header end-->




