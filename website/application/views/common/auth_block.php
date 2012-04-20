
<form id="login_form">
    <div class="title_text">ОСОБИСТИЙ КАБІНЕТ</div>
    <div class="gorizont_line"></div>
    <span id="AMA_auth_block" ><?php echo get_ajax_messages(); ?></span>
    <div class="login_panel">
        <div class="login">

            <div class="msg">
                <span for="login" ><{Ім’я}></span><em></em><br />
            </div>
            </br>
            <div class="inputs">
                <input class="style_checkbox" type="text" name="login" id="login" class="login" minlength="2" />
                <span><a href="#"> Забули логiн?</a></span>
            </div>
            <div class="msg_errors"></div>

        </div>

        <div class="password">
            
            <div class="msg">
                <span for="password" ><{Пароль}></span><em></em><br />
            </div>
            </br>
            <div class="inputs">
                <input class="style_checkbox" type="password" name="password" id="password" class="password" minlength="2" />
                <span><a href="#"> Забули пароль?</a></span>
            </div>
            <div class="msg_errors"></div>                 

        </div>
                
        <div class="check"><input type="checkbox" name="alien" value="ON" /> Чужий комп'ютер </div>
        
        <div class="login_button_div">
            <input class="login_button" type="submit" value="Увійти" />
        </div>
    </div>
</form>