/*<script type="text/javascript">
        */
    
    
        function edit_general_info()
    {
        var status=$('#select_status').val()
        var age=$('#age').val();
        var marital_status=$('#merital_select').val();
        var skills=$('#skills_select').val();
        var country_id=$('#country_select').val();
        var city=$('#city').val();
        var requestUrl = '<?php echo site_url('ajax/registration/'); ?>';
        var current_status=$('#current_status').val();
        var step='info_time';
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
        $.post (requestUrl,
        {
            step:step,
            status:status,
            age:age,
            marital_status:marital_status,
            skills:skills,
            country_id:country_id,
            city:city,
            current_status:current_status
        }, function(data)
        {
            ajax_loader();
            if( data.status == 0 )
            {
                if( data.msg != null && data.msg != undefined )
                {          
                    alert('no');                              
                }
                validator.showErrors(validator_errors_prepare(validator,data.params));
                
            }                
            if( data.status == 1 )
            {
                if( data.msg != null && data.msg != undefined ) 
                {                         
                          
                    alert('yes');     
                }
            }
        }, 'json');
        
    }
    
    function add_experience(name_form,name_type)
    {
        var form=name_form;
        var type=name_type;
        
        var title=$('input[for=title]',form).val();
        var age_begin=$('input[for=age_begin]',form).val();
        var age_end=$('input[for=age_end]',form).val();
        var details=$('input[for=details]',form).val();
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
        
        $.post (requestUrl,
        {
            step:'experience',
            type:type,
            title:title,
            age_begin:age_begin,
            age_end:age_end,
            details:details
        }, function(data)
        {
            ajax_loader();
            if( data.status == 0 )
            {
                if( data.msg != null && data.msg != undefined )
                {          
                    $(form).find('div[name=msg]').html(data.msg).show().delay(2400).fadeOut(600);                                             
                }
                validator.showErrors(validator_errors_prepare(validator,data.params));
                
            }                
            if( data.status == 1 )
            {
                if( data.msg != null && data.msg != undefined ) 
                {                         
                    $(form).find('div[name=msg]').html(data.msg).show().delay(2400).fadeOut(600);        
                }
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
        $("#age").mask("9999-99-99");
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
        /*Add experience*/
       
        $('#education').live('click',function(){        
            var form=$('#education_experience');
            var type='education';
            experience_valid(form);
            if ( $(form).valid() ) {
                add_experience(form,type);
            }
           
        });   
        
        $('#work').live('click',function(){        
            var form=$('#work_experience');
            var type='work';
            experience_valid(form);
            if ( $(form).valid() ) {
                add_experience(form,type);
            }
           
        });
           
           
        function experience_valid(name_){
           
            $(name_).validate({
                errorPlacement: function(error, element){
                    error.appendTo( $(element).parent('div') );
                },    
                errorClass: "error",
                validClass: "valid",
                success: 'valid',
                debug: false,
                highlight: function(element, errorClass, validClass) { 
                    $(element).addClass('make_error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('make_error');
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
        }  
        /*End Add experience*/
        /*add general info*/
        $('#general_information').live('click',function (){
            var form=$('#more_info');
            if (form.valid()) 
            {
                edit_general_info();
            }            
        });
        
        $('#more_info'). validate(
        {
            errorPlacement: function(error, element){
                error.appendTo( $(element).parent('div').next('div') );
            },
            errorClass: "error",
            validClass: "valid",
            success: 'valid',
            debug: false,
            highlight: function(element, errorClass, validClass) { 
                $(element).addClass('make_error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('make_error');
            },
            rules:{
                city: {
                    required: true
                }
            }
        }
    );
        /*end add general info*/
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
    
    function upload_new_image()
    {
var image = $("#user_image").attr('alt');
var requestUrl = '<?php echo site_url('ajax/edit_image/'); ?>';
$.post(requestUrl, {image:image, step:'edit_image'}, function()
        {
alert('true');            
        }, 'json');
    }


    
   
    /*</script>*/