<?php
//@doto ajax loader image
//@doto ajax error/success messages
//@doto fine tunes design 
//@doto flash messages
?>
<div class="ajax_messages">
    <div id="ajax_loader">Loading, please wait <img border="0" style="margin:0;padding:0;" src="<?php echo _img('ajax-loader.gif'); ?>" /></div>
    <div class="error" id="ajax_err">Please check data again</div>
    <div id="ajax_msg"></div>
    <?php
    $CI = &get_instance();
    $flash = $CI->session->flashdata('msg');
    if( !empty($flash) )
    {
    ?>
    <div id="flash_msg"><?php echo $flash; ?></div>
    <?php
    }
    ?>
</div>
