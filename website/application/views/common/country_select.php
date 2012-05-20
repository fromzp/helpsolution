<?php
$input = intval($input);
if( isset($countries) and is_array($countries) and sizeof($countries)>0 )
{
    foreach( $countries as $country_id=>$country )
    {
        ?>
            <option <?php
            if( $country_id == $input )
                {
                echo ' selected="true" '; 
                }
                ?> value="<?php
                echo $country_id;
                ?>"><{<?php echo $country['name']; ?>}></option>
        <?php
    }
}
else
{
    echo '<option><{Empty list}></option>';
}

?>