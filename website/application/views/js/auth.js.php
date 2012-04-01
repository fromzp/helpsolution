/*<script type="text/javascript">*/
    var authModeValue = 'login';


function authLogin()        
{
    var email = $("input[name=login]").val();
    var password = $("input[name=password]").val();
    
    if( email.length ==0 || password.length==0 )
        {
            return false;
        }
    //@doto use validate form
    var requestUrl = '<?php echo site_url('ajax/auth/login'); ?>';
    $.ajax(
        {
            url: requestUrl,
            beforeSend: function(){
              ajax_move($("#AMA_auth_block"));
              ajax_loader();  
            },
            success: function(data)
            {
                ajax_loader();
                if( data.status == 1 )
                {
                    if( data.params.url )
                        {
                            window.location.replace(data.params.url);

                        }
                        else
                        {
                            location.reload(true);
                        }
                }
                if( data.status == 0 )
                {
                    if( data.msg != null && data.msg != undefined )
                    {
                        ajax_error(data.msg);
                    }
                    $("input[name=password]").val('');
                }
            },
            timeout: 5*1000,
            dataType: 'json',
            data: {'email': email, 'password': $.md5(password)},
            type: 'POST'
        }
    );
}

function authMode(mode)
{
    authModeValue = mode;
    bind_enter();
    if( mode == 'login')
    {
        // hide
        $("#authRecoveryButton").hide();
        
        // show
        $("#authLoginButton").show();
        $("#authLoginPasswordArea").show();
    }
    
    if( mode == 'recovery')
    {
        // hide
        $("#authLoginButton").hide();
        $("#authLoginPasswordArea").hide();
        
        // show
        $("#authRecoveryButton").show();
    }
    
}

function authPasswordRecovery()        
{
    var email = $("input[name=login_email]").val();
    
    var requestUrl = '<?php echo site_url('ajax/auth/recovery'); ?>';
    $.ajax(
        {
            url: requestUrl,
            beforeSend: function(){
              ajax_move($("#AMA_auth_block"));
              ajax_loader();  
            },
            success: function(data)
            {
                ajax_loader();
                if( data.status == 1 )
                {
                    ajax_message(data.msg);
                }
                if( data.status == 0 )
                {
                    if( data.msg != null && data.msg != undefined )
                    {
                        ajax_error(data.msg);
                    }
                }
            },
            timeout: 5*1000,
            dataType: 'json',
            data: {'email': email },
            type: 'POST'
        }
    );
}

function authLogout()        
{
    var requestUrl = '<?php echo site_url('ajax/auth/logout'); ?>';
    $.ajax(
        {
            url: requestUrl,
            success: function(data)
            {
                if( data.status == 1 )
                {
                    document.location = '<?php echo base_url(); ?>';
                }
            },
            timeout: 5*1000,
            dataType: 'json',
            data: {},
            type: 'GET'
        }
    );
}

function bind_enter()
{
    $("input[name=login_password]").unbind();
    $("input[name=login_password]").bind('keydown',function(e){
    if(e.keyCode == 13 && authModeValue == 'login')
    {
            authLogin();
    }
});

$("input[name=login_email]").unbind();
$("input[name=login_email]").bind('keydown',function(e){
    if(e.keyCode == 13)
    {
        if( authModeValue == 'login' )
        {
            authLogin();
        }
        else
        {
            authPasswordRecovery();
        }
    }
});
    
}

$(function(){

authMode('login');

// show/hide login block
$("#login").live("click",
    function(){
        ajax_loader(true /*reset*/);
        authMode('login');
        $('.login_inside').show();
        $("input[name=login_email]").focus();
    }
); 
    
$("#close_login").live("click",
    function(){
        $('.login_inside').hide();
    }
); 

$("#authLoginButton").bind('click',function(){
    authLogin();
});

$("#passwordRecoveryLink").click(function(){
    authMode('recovery');
    return false;
});

$("#authRecoveryButton").click(function(){
    authPasswordRecovery();
});

bind_enter();

});

/*</script>*/