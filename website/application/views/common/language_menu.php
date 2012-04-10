<!-- Language menu -->
<select size="1" onchange="switchLanguage($(this).val())" >
<?php
if( isset($languages) and is_array($languages) and sizeof($languages)>0 )
{
    foreach( $languages as $language )
    {
        ?>
    <option <?php if( LANGUAGE_ID == $language['id']){ echo ' selected="true" '; }?>value="<?php echo $language['id']; ?>"><{__<?php echo $language['code']; ?>}></option>
        <?php
    }
    
}
?>
</select>
<!-- End of Language menu -->