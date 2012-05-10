/*<script type="text/javascript">
    */
    

    function make_edit()        
    {
       
   
        var email = $("#email").val();
        var password = $("#password").val();
        var password2 = $("#password2").val();
        var name=$('#name').val();
        var lastname=$('#lastname').val();        
        var sex=$(':radio[name=sex][checked=checked]').val();
        
        var requestUrl = '<?php echo site_url('ajax/registration/user_registration_info_change'); ?>';
        
        $.ajaxSetup(
        {
            beforeSend: function(){
                ajax_loader();
            },
            error: function(){
                ajax_loader();   
                ajax_error('Registration error.');
                alert('ERROR');
            }
    
        });
        
        $.post(requestUrl, {email:email, password:password, password2:password2, name:name, lastname:lastname, sex:sex}, function(data)
        {
            ajax_loader();
            if( data.status == 0 )
            {
                /*
                    if( data.msg != null && data.msg != undefined )
                    {

                        ajax_error(data.msg);
                        
                    }*/
                validator.showErrors(validator_errors_prepare(validator,data.params));
                //@doto integrate with jquery.validator
            }
                
            if( data.status == 1 )
            {
                window.location.reload(); 
            }
        }, 'json');
    }

    $(document).ready(function(){

        var form = $("#edit_login_form");

        validator = $(form).validate(
        {
            errorPlacement: function(error, element){
                error.appendTo( $(element).next('div') );
            },    
            errorClass: "error",
            validClass: "valid",
            success: 'valid',
            debug: false,
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
                
                password2:
                    {
                    required: true,
                    equalTo: "#password"
                }
            }
        });

        $('#registration_info').live('click', function()
        {
       /* $('#email').removeData("previousValue");
        $('#edit_login_form').validate().element( "#email" );
     */
           
           if ( $('#edit_login_form').valid() ) 
           {
              
                make_edit();
               
            }
        });


    });
    

/*</script>*/