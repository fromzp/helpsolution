/*<script type="text/javascript">*/
       
        var validator; 
    
    function doRegistration()        
    {
        var button = $("#doRegistrationbutton");
    
        // check fields
        // get fields
        var email = $("#email").val();
        var password = $("#password").val();
        var password2 = $("#password2").val();
        var name=$('#name').val();
        var lastname=$('#lastname').val();
        
        var sex=$(':radio[name=sex][checked=checked]').val();
        var taked_status= $(':radio[name=help][checked=checked]').val();
        var agree = $(':checkbox[ name=accept_check]').attr('checked');
        var purpose=$(':radio[name=help][checked=checked]').val();
   
        var recaptcha_response_field = $("#recaptcha_response_field").val();
        var recaptcha_challenge_field = $("#recaptcha_challenge_field").val();
        var image = $("#user_image").attr('alt');
        
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
                        if ( data.msg == "upload error" ) {
                            $("#preview").html("Check right to upload and upload/tmp folder");
                        }
                        ajax_error(data.msg);
                        
                    }
                    validator.showErrors(validator_errors_prepare(validator,data.params));
                    
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
        alert('ERROR');
            },
            timeout: 5*1000,
            dataType: 'json',
            data: 
            {
                step: 'user_create', 
                
                'name':        name,
                'lastname':    lastname,
                'email':       email,
                'password':    password,
                'password2':    password2,
                'recaptcha_response_field':    recaptcha_response_field,
                'recaptcha_challenge_field':    recaptcha_challenge_field,
                'image':        image,
                'sex':          sex,
                'purpose':      purpose
                    
                
            },
            type: 'POST'            
        }
    );
            
    }

    $(document).ready(function(){
       
        $("#doRegistrationButton").click(function(){
            if( $("#registrationForm").valid() )
            {
                doRegistration();
            }
        });
    
        validator = $("#registrationForm").validate({
            errorPlacement: function(error, element)
            {
                error.appendTo( $(element).parent('div').prev("div") );
            },
            debug: false,
            errorClass: "error",
            validClass: "valid",
            success: 'valid',
            onclick: false,
            onkeyup: false,
            onfocusout: false,
            onsubmit: true,
            highlight: function(element, errorClass, validClass) {
                $("span[for=" + element.id + "]").addClass(errorClass);
            },
            unhighlight: function(element, errorClass, validClass) {
                $("span[for=" + element.id + "]").removeClass(errorClass);
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
                    email: true,
                    remote: '<?php echo site_url('ajax/validation/email_check') ?>'
                },
                password:
                    {
                    required: true,
                    minlength: 6
                },
                recaptcha_response_field:
                    {
                    required:true
                },
                
                password2:
                    {
                    required: true,
                    equalTo: "#password"
                },
                accept_check: {
                   required: true 
                }
                
            }
            
        });
        
        $("#upload_photo").live('click',function()
        {
            
            $("#photoimg").click();
        });

        $('#photoimg').live('change', function() //photoimg изменился?!
        {
            $("#preview").html(''); // чистим preview
            $("#preview").html('<img src="<?php echo _img('loader.gif'); ?>"/>'); //показываем картинку загрузки
            $("#imageform").ajaxForm( //отправляем аякс запрос (тут уже действует jquery.fomrm
            {
                target: '#preview'
            }).submit();
        });
    
    });

    /*</script>*/