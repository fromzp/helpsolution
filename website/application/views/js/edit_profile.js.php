/*<script type="text/javascript">
        */
    
        function add_experience()
    {
        var title=$("#title").val();
        var age_begin=$("#age_begin").val();
        var age_end=$("#age_end").val();
        var details=$("#details").val();
        var requestUrl = '<?php echo site_url('ajax/registration/'); ?>';
        $.ajaxSetup(
        {
            beforeSend: function(){
                ajax_loader();
            },
            error: function(){
                ajax_loader();   
                ajax_error('Experience error.');
                alert('ERROR');
            }    
        });
        
        $.post (requestUrl,{step:'experience', title:title, age_begin:age_begin,age_end:age_end,details:details}, function(data)
        {
            ajax_loader();
            if( data.status == 0 )
            {
                 if( data.msg != null && data.msg != undefined )
                    {          
                        ajax_error(data.msg);
                        console.log('msg:'+data.msg);                      
                    }
                validator.showErrors(validator_errors_prepare(validator,data.params));
                
            }                
            if( data.status == 1 )
            {
                alert('made'); 
            }
        });
    }
    

    function make_edit_registration_info()        
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
            if ( $('#edit_login_form').valid() ) 
            {              
                make_edit_registration_info();
               
            }
        });
        /*Add education*/
        $('#education').live('click',function(){        
                    
            if ( $('#education_experience').valid() ) {
                add_experience();
            }
           
        });   
              
        $('#education_experience').validate({
            errorPlacement: function(error, element){
                error.appendTo( $(element).parent('div') );
            },    
            errorClass: "error",
            validClass: "valid",
            success: 'valid',
            debug: false,
            highlight: function(element, errorClass, validClass) {   
                 $("span[for=" + element.id + "]").addClass(errorClass);
                $("#"+element.id).addClass('make_error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $("span[for=" + element.id + "]").removeClass(errorClass);
                $("#"+element.id).removeClass('make_error');
                
            },
            rules: {
                title: {
                    required: true                    
                },
                age_begin: {
                    required: true,
                    minlength: 4
                    
                },
                age_end: {
                    required: true,
                    minlength:4
                },
                details: {
                    required: true                     
                }
            }
                

        });
        /*End Add education*/
    
    });
    /*</script>*/