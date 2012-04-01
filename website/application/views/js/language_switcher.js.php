/*<script type="text/javascript">*/
/* language_switcher.js*/
function switchLanguage(languageId)        
{
    var requestUrl = '<?php echo site_url('ajax/language/switch_language'); ?>';
    $.ajax(
        {
            url: requestUrl,
            success: function(data)
            {
                if( data.status == 1 )
                {
                    location.reload(true);
                }
            },
            timeout: 5*1000,
            dataType: 'json',
            data: {language_id: languageId},
            type: 'POST'
        }
    );
}
/*</script>*/