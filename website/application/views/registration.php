<?php
$title = replace_lang('<{Registration Page Title}>');



#$objects[] = array('js_source', 'js/jquery.validate.min.js');
#$objects[] = array('js_source', 'js/jquery_validate_locale/messages_' . LANGUAGE_CODE2 . '.js');
#$objects[] = array('js', 'registration.js');
#$objects[] = array('js', 'registration/step1.js');
#$objects[] = array('js', 'recaptcha_theme_clean.js');

$objects = array();

$objects[] = array('css', 'style_home.css.php', array('id' => 'style_home.css'));

$objects[] = array('js_source','js/jquery.validate.min.js', array('id'=>'validate.js'));
$objects[] = array('js_source', 'js/jquery_validate_locale/messages_' . LANGUAGE_CODE2 . '.js', array('id'=>'validate_local.js'));

$objects[] = array('js','registration.js.php', array('id'=>'registration.js'));


echo get_header($title, $objects);
?>



<div class="title_registration">
    <h3 style="text-align: center;"><{РЕЄСТРАЦIЯ}></h3>
</div>



<span class="ajax_messages_area"></span>

<form id="registrationForm" >
    
    <div id="rgistration_border">
        
    <div class="user_photo">
        <div class="photo"> 
        <div class="upload_photo">
            </div>
            <div class="choose">
       <div class="inputs_radio">
            <input type="radio" name="help" value="Чоловік" checked="checked" /><span>Я можу допомогти</span></br>
             <div class="rubber"></div>
            <input type="radio" name="help" value="Жінка" checked="" /><span>Мені потрібна допомога</span> 
        </div>
            
            </div>
        </div>
        <div class="line"></div>
    </div>
    <div class="kolonki">
        <div class="inputs">
         <input type="text" name="email" id="email" /> 
        </div>
        <div class="msg">
            <span for="email"  ><{Електрона адреса}></span><em>*</em> </br>
        </div>
         <br /><br />
        <div class="rubber"></div>
        <div class="inputs">     
            <input type="password" name="password" id="password" class="required" /> 
        </div>
        <div class="msg">
            <span for="password" ><{Пароль}></span><em>*</em> </br>
        </div>
       <br /><br />
        <div class="rubber"></div>

        <div class="inputs">    
            <input type="password" name="password2" id="password2" class="required" />
        </div>
        
        <div class="msg">
            <span for="password2" ><{Повторіть пароль}></span><em>*</em> </br>
        </div> 
         <br /><br />
        <div class="rubber"></div>
        <div class="inputs">
            <input type="text" name="name" id="name" class="required" minlength="2" /><br />
        </div>
        <div class="msg">
            <span for="name" ><{Ім’я}></span><em>*</em><br />
        </div>
         <br /><br />
        <div class="rubber"></div>
        <div class="inputs">
            <input type="text" name="lastname" id="lastname" class="required" minlength="2"/><br />
        </div>
        <div class="msg">
            <span for="lastname" ><{Прізвище}></span><em>*</em><br />
        </div>       
         <br /><br />
        <div class="rubber"></div>
        <div class="inputs_radio">
            <input type="radio" name="sex" value="Чоловік" checked ="" /><span>Чоловік</span> 
            <input type="radio" name="sex" value="Жінка"  /><span>Жінка</span> 
        </div>
        <div class="msg">
            <span for="sex" ><{Стать}></span><em>*</em><br />
        </div>
         <br /><br />
        <div class="rubber"></div>
        <div class="inputs">
            <input type="text" name="captch_nomber" id="name" /><br />
        </div>
        <div class="msg">
            <span for="captch_nomber" ><{Введіть код на малюнку нижче}></span><em>*</em><br />
        </div> 
        <div class="rubber"></div>
        <div class="captcha"> <div class="image"> </div></div>
        <div class="inputs">
            <span class="necessarily">
                Поля, що мають зірочку є обов’язковими для заповнення.</br>
                Будь ласка ознайомтеся з правилами користування біржою.
            </span>
        </div>
    </div>
        
    </div>
        <div class="accept">
            <input type="checkbox" name="accept_check" /> Я ознайомився/лась з <a href="#">правилами та умовами </a> біржі та погоджуюсь з ними.
           
        </div>
 <div class="rubber"></div>
 
          <div id="doRegistrationButton"> <span for="registration">Зареэструватися</span> </div>
         <input  class="back_button" type="submit" id="submit" value="Назад" />
</form>
<?php echo get_footer(); ?>

