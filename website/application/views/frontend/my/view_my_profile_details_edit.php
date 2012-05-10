<?php
$title = replace_lang('<{My profile Title}>');
$objects = array();
$objects[] = array('js_source', 'js/jquery.validate.min.js', array('id' => 'validate.js'));
$objects[] = array('js_source', 'js/jquery_validate_locale/messages_' . LANGUAGE_CODE2 . '.js', array('id' => 'validate_local.js'));

$objects[] = array('js', 'ajax.js.php', array('id' => 'ajax.js'));
$objects[] = array('js', 'edit_profile.js.php', array('id' => 'edit_profile.js'));

echo get_header_auth($title, $objects);
?>

<div class="content">

    <div class="profile">
        <div class="left_part">
            <div class="portfolio">
                <div class="portfolio_name">
                    <?php echo strtoupper($user_details['name'] . " " . $user_details['lastname']) ?>
                </div>
                <div class="portfolio_rating"> (звездочки) </div>
                <div class="portfolio_photo">
                    <img src="<?php echo _img('photo_load_grey.png'); ?>"  width="200" height="235" alt="Image">
                </div>
                <div class="portfolio_energy">

                    <table class="energy" border="0">                
                        <tr>
                            <td>()</td>
                            <td>зарезервованих</td>
                        <tr>
                            <td>()</td>
                            <td>вiльних</td>
                        </tr>                  

                    </table>

                </div>
                <div class="user_info_statistic">
                    <div class=fitst_info>
                        <div class="info_div"><span class="info_span">Приедналася:</span><?php echo date("d:m:Y", $user_details['create_time']); ?></div>
                        <div class="info_div"><span class="info_span">Допомогла:</span>()</div>
                        <div class="info_div"><span class="info_span">Просила помiч:</span>()</div>
                        <div class="info_div"><span class="info_span">Участь в заходах</span>()</div>              
                    </div>
                    <div class=second_info>
                        <div class="info_div"><span class="info_span">Вiдгукiв:</span>()</div>
                        <div class="info_div"><span class="info_span">Доступнiсть:</span>()</div>
                        <div class="info_div"><span class="info_span">Рейтинг:</span>()</div>                
                    </div>
                </div>
                <!--
                <div class="portfolio_buttons">
                    <div id="ask_about_help">ЗАПИТАТИ ПРО ДОПОМОГУ</div>
                    <div id="write_message">НАПИСАТИ ПОВIДОМЛЕНЯ</div>
                </div>
                -->
            </div>
            <div class="news"></div>
        </div>
    </div>

    <div class="main_content">
        <div class="paragraph"> <span class="text">Чому я тут</span>  <span class="save_edited" id="why_im_here">Зберiгти</span></div>
        <div class="why_i_here">
            <textarea id ="about_me" cols="105" wrap="soft | hard" value="Чому я тут ?">  </textarea>
        </div>
        <div class="paragraph"> <span class="text">Загальна iнформацiя</span>  <span class="save_edited" id="general_information">Зберiгти</span></div>
        <div class="more_info">
            <div class="info_div"> <div class="content_icon content_icon_status">   </div>    <span class="info_span">Статус:</span> 
                <div class="selects">
                    <select id="select_status"> 
                        <option>Пункт 1</option>
                        <option>Пункт 2</option>                     
                    </select>
                </div>
            </div>
            <div class="info_div"> <div class="content_icon content_icon_age">      </div>    <span class="info_span">Вiк:</span>

                <div class="selects"> <input type="text" id="age_select"/></div> </div>
            <div class="info_div"> <div class="content_icon content_icon_marital">  </div>    <span class="info_span">Сiмейний стан:</span>
                <div class="selects">
                    <select id="merital_select"> 
                        <option>Пункт 1</option>
                        <option>Пункт 2</option>                     
                    </select>
                </div>
            </div>
            <div class="info_div"> <div class="content_icon content_icon_skills">   </div>    <span class="info_span">Головнi сфери допомоги:</span>
                <div class="selects">
                    <select id="skills_select"> 
                        <option>Пункт 1</option>
                        <option>Пункт 2</option>                     
                    </select>
                </div>
            </div>
            <div class="info_div two_select"> <div class="content_icon content_icon_country">  </div>    <span class="info_span">Мiсто</span>
                <div class="selects">
                    <input type="text" id="city_select"/>
                    <select id="country_select"> 
                        <option>Пункт 1</option>
                        <option>Пункт 2</option>                     
                    </select>
                </div>

            </div>
        </div>

        <div class="market_history">
            <div class="paragraph"> <span class="text">Істория Активності на Біржі</span> </div>
            <div class="all_of_history"> </div>
        </div>

        <div class="base_skills">
            <div class="paragraph"> <span class="text">Освіта</span> <span class="save_edited" id="education">Зберiгти</span></div> 
            <div class="educetion">
                <div class="info_div"> <span>Назва навчального закладу:</span><input type="text"/></br> </div>
                <div class="info_div"><span>Роки навчання:</span> <input type="text" size="4"/>-<input type="text" size="4"/></br> </div>
                <div class="info_div"><span>Спецiальнiсть:</span> <input type="text"/> </div>
            </div>           
            <div class="paragraph"> <span class="text">Історія роботи</span> <span class="save_edited" id="experience history">Зберiгти</span></div> 
            <div class="work_where">
                <div class="info_div"> <span>Назва навчального закладу:</span><input type="text"/></br> </div>
                <div class="info_div"><span>Роки навчання:</span> <input type="text" size="4"/>-<input type="text" size="4"/></br> </div>
                <div class="info_div"><span>Спецiальнiсть:</span> <input type="text"/> </div>
            </div>
        </div>


        <div class="change_info">
            <div class="paragraph"> <span class="text">Регестрацiйнi даннi</span> <span class="save_edited" id="registration_info">Зберiгти</span></div> 

            <form id="edit_login_form" class="change_registration_info">

                <div class="inputs">                    
                    <span class="input_name"><{Електрона адреса:}></span>
                    <input type="text" name="email" id="email" value="<?php echo $user_details['email']; ?>" />
                    <div class="msg"> <span for="email"  > </span><em></em> </div>
                </div>

                <div class="inputs">                    
                    <span class="input_name"><{Пароль:}></span>
                    <input type="password" name="password" id="password" />
                    <div class="msg"> <span for="password"  > </span><em></em> </div>
                </div>

                <div class="inputs">                    
                    <span class="input_name"><{Повторіть пароль:}></span>
                    <input type="password" name="password2" id="password2" />
                    <div class="msg"> <span for="password2"  > </span><em></em> </div>
                </div>

                <div class="inputs">                    
                    <span class="input_name"><{Cтать:}></span>
                    <div class="sex">
                        <input type="radio" name="sex" value="m" <?php echo $user_details['sex'] == "m" ? 'checked="checked"' : '' ?>/><span>Чоловік</span> 
                        <input type="radio" name="sex" value="f" <?php echo $user_details['sex'] == "f" ? 'checked="checked"' : '' ?> /><span>Жінка</span>                     
                        <div class="msg"> <span for="sex"  > </span><em></em> </div>
                    </div>
                </div> 

                <div class="inputs">                    
                    <span class="input_name"><{Ім’я:}></span>
                    <input type="text" name="name" id="name" value="<?php echo!empty($user_details['user_name']) ? $user_details['user_name'] : '' ?>" />
                    <div class="msg"> <span for="name"  > </span><em></em> </div>
                </div>

                <div class="inputs">                    
                    <span class="input_name"><{Прізвище:}></span>
                    <input type="text" name="lastname" id="lastname" value="<?php echo!empty($user_details['lastname']) ? $user_details['lastname'] : '' ?>"/>
                    <div class="msg"> <span for="lastname"  > </span><em></em> </div>
                </div>

            </form>

        </div>

    </div>






</div>


<?php echo get_footer(); ?>