/*<script type="text/javascript">
    */
    
$(function(){
    $("#flash_msg").delay(1200).fadeOut(600);
    ajax_move($(".ajax_messages_area"));
});

function ajax_loader(reset)
{
    if( !reset || reset == '')
    {
        reset = false;
    }
    else
    {
        reset = true;
    }
    
    var state = $("#ajax_loader").css('display');
    $(".ajax_messages").children('div').each(function(){
        $(this).hide();
    });
    if(  state == 'none' )
    {
        if( reset == false)
        {
            $("#ajax_loader").show();
        }
    }
}

function ajax_error(msg)
{
    /*var state = $("#ajax_err").css('display');*/
    $("#ajax_err").html('');
    $(".ajax_messages").children('div').each(function(){
        $(this).hide();
    });
    if( msg !== null && msg !== undefined )
    {
        $("#ajax_err").html(msg);
        /*$("#ajax_err").show().delay(2400).fadeOut(600);*/
        $("#ajax_err").show();
    }
}

function ajax_message(msg)
{
    var state = $("#ajax_msg").css('display');
    $("#ajax_msg").html('');
    
    $(".ajax_messages").children('div').each(function(){
        $(this).hide();
    });
    if(  state == 'none' && msg != null && msg != undefined )
    {
        $("#ajax_msg").html(msg);
        //$("#ajax_msg").fadeIn().delay(1200).fadeOut(600);
        $("#ajax_msg").show();
    }
}

function ajax_move(element)
{
    if( element != null && element != undefined )
    {
        $(".ajax_messages").appendTo(element);
    }
}


function validator_errors_prepare(validator, errors)
{

    if( !jQuery.isPlainObject(errors) )
    {
        return false;
    }
    
    if( !$.validator )
    {
        return false
    }
    
    var showErrors = {};
    for( var err in errors )
    {
        var type = errors[err].type;
        var params = errors[err].params;

        if( !$.validator.messages[type])
        {
            continue;
        }

        if( !jQuery.isFunction($.validator.messages[type])  )
        {
            var message = $.validator.format($.validator.messages[type],params);
        }
        else
        {
            var message = $.validator.messages[type](params);
        }
            showErrors[err] = message;
    }
    
    if( jQuery.isPlainObject(showErrors) )
    {
        return showErrors;
    }
    
    return false;
}

function ajax_rand()
{
    return $.md5(Math.random().toString());
}
/*</script>*/