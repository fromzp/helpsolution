/*<script type="text/javascript">*/
       
        var validator; 
    /*
function doRegistration()        
{
    var button = $("#doRegistrationbutton");
    
    // check fields
    // get fields
   
    var email = $("#email").val();
    var password = $("#password").val();
    var password2 = $("#password2").val();
    var recaptcha_response_field = $("#recaptcha_response_field").val();
    var recaptcha_challenge_field = $("#recaptcha_challenge_field").val();
    
   
    $.ajax(
        {
            url: '<?php echo site_url('ajax/registration'); ?>',
            beforeSend: function(){
             ajax_loader();
            },
            success: function(data)
            {
                ajax_loader();
                if( data.status == 0 )
                {
                    Recaptcha.reload();
                    if( data.msg != null && data.msg != undefined )
                    {
                        ajax_error(data.msg);
                    }
                    validator.showErrors(data.params);
                    //@doto integrate with jquery.validator
                }
                
                if( data.status == 1 )
                {
                    if( data.params.url )
                    {
                        window.location.replace(data.params.url);
                    }
                }
                
            },
            error: function(){
            ajax_loader();   
            ajax_error('Registration error.');
            },
            timeout: 5*1000,
            dataType: 'json',
            data: 
            {
                step: 'user_create', 
               
                'name':        name,
                'email':       email,
                'password':    password,
                'password2':    password2,
                'recaptcha_response_field':    recaptcha_response_field,
                'recaptcha_challenge_field':    recaptcha_challenge_field
            },
            type: 'POST'
            
        }
    );
    
}*/

    $(document).ready(function(){
        $("#doRegistrationButton").click(function(){
            if( $("#registrationForm").valid() )
            {
                alert("haha");
            }
        });
    
        validator = $("#registrationForm").validate({
            errorPlacement: function(error, element)
            {
                error.appendTo( $(element).parent('div').next("div") );
            },
            rules:
                {
                name: 
                    {
                    required: true
                },
                lastname: {
                    required: true
                },
            
                email:
                    {
                    required: true,
                    email: true
                    // remote: '<?php echo site_url('ajax/validation/email_check') ?>'
                },
                password:
                    {
                    required: true,
                    minlength: 6
                },
                password2:
                    {
                    required: true,
                    equalTo: "#password"
                }
                /*recaptcha_response_field:
                {
                    required:true
                }*/
            }
        });
        
        $("#upload_photo").live('click',function()
        {
            
            $("#photoimg").click();
        });

        $('#photoimg').live('change', function() //photoimg изменился?!
        {
            $("#preview").html(''); // чистим preview
            $("#preview").html('<img src="http://helpsolution/img/loader.gif" alt="Uploading...."/>'); //показываем картинку загрузки
            $("#imageform").ajaxForm( //отправляем аякс запрос (тут уже действует jquery.fomrm
            {
                target: '#preview'
            }).submit();
        });
/*        
        $(".header").click(function(){
            $("#preview").html(''); // чистим preview
            $("#preview").html('<img src="http://helpsolution/img/loader.gif" alt="Uploading...."/>'); //показываем картинку загрузки
            $("#imageform").ajaxForm( //отправляем аякс запрос (тут уже действует jquery.fomrm
            {
                target: '#preview'
            }).submit();
        });
  */      
    });

    /*</script>*/