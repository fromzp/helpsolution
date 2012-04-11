<?php
$title = replace_lang('<{sys_page_'. $page .'}>');
$objects = array();

$objects[] = array('css', 'style_home.css.php', array('id' => 'style_home.css'));

echo get_header($title, $objects);
?>

<?php echo $page_content;   ?>
    

<?php echo get_footer(); ?>