<?php
$title = replace_lang('<{sys_page_'. $page .'}>');
echo get_header($title); 
?>

<?php echo $page_content;   ?>
    

<?php echo get_footer(); ?>