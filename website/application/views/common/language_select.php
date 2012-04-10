<?php
$input = intval($input);
if( isset($languages) and is_array($languages) and sizeof($languages)>0 )
{
    foreach( $languages as $language_id=>$language )
    {
        ?>
            <option <?php if( $input == $language['id']){ echo ' selected="true" '; }?>value="<?php echo $language['id']; ?>"><{__<?php echo $language['code']; ?>}></option>
        <?php
    }
}
else
{
    echo '<option><{Empty list}></option>';
}

?>