/*<script type="text/javascript">
 registration/step1_block.js */

var validator = null; 

$(document).ready(function(){

var form = $("#login_form");

   validator = $(form).validate(
   {
    errorPlacement: function(error, element){
      error.appendTo( $(element).parent('div').next('div') );
    },
    submitHandler: function(form) {
     authLogin();
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
            login:
                {
                    required: true,
                    email: true
                    
                },
            password:
                {
                    required: true
                }
        }
   });

});
/*</script>*/