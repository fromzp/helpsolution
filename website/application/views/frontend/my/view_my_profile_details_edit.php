<?php
$title = replace_lang('<{My profile Title}>');
$objects = array();

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
                <div class="portfolio_buttons">
                    <div id="ask_about_help">ЗАПИТАТИ ПРО ДОПОМОГУ</div>
                    <div id="write_message">НАПИСАТИ ПОВIДОМЛЕНЯ</div>
                </div>
            </div>
            <div class="news"></div>
        </div>
    </div>

    <div class="main_content">
        <div class="why_i_here">
            <textarea id ="about_me" cols="105" wrap="soft | hard" value="Чому я тут ?">  </textarea>
        </div>
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

    </div>

</div>


<?php echo get_footer(); ?>
