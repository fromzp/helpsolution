<?php
$title = replace_lang('<{My profile Title}>');
$objects = array();

echo get_header_auth($title, $objects);
?>


<div class="content profile_content">

    <div class="profile">
        <div class="left_part">
            <div class="portfolio">
                <div class="portfolio_name">
                    <?php echo strtoupper($user_details['name'] . " " . $user_details['lastname']) ?>
                </div>
                <div class="portfolio_rating"> (звездочки) </div>
                <div class="portfolio_photo">
                    <img src="<?php if (!empty($user_details['photo']))
                        echo _img($user_details['photo']); ?>" alt="Image">
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

        <div class="about_me">
            <span>" Выводим (about_me)"</span>
        </div>
        <div class="more_info">
            <div class="info_div"> <div class="content_icon content_icon_status">   </div>    <span class="info_span">Статус:</span>(echo status)</div>
            <div class="info_div"> <div class="content_icon content_icon_age">      </div>    <span class="info_span">Вiк:</span>(echo age)</div> 
            <div class="info_div"> <div class="content_icon content_icon_marital">  </div>    <span class="info_span">Сiмейний стан:</span>(echo marital)</div>
            <div class="info_div"> <div class="content_icon content_icon_skills">   </div>    <span class="info_span">Головнi сфери допомоги</span>( echo skills)</div>
            <div class="info_div"> <div class="content_icon content_icon_country">  </div>    <span class="info_span">Мiсто</span>(echo City, Country)</div>
        </div>


        <div class="market_history">
            <div class="paragraph"> <span class="text">Істория Активності на Біржі</span> </div>                        
            <div class="all_of_history">
                
                <!-- in controller profile, from database take first 4 history project ant pull in the history div -->


                <div class="history">
                    <div class="project_photo">
                        <div class="history_photo"></div>
                        <div class="photo_info"> <span>exo title</span> <a href=""></a></div>
                    </div>
                    <div class="history_fild">
                        <div class="history_rating"> exho star rating</div>
                        <div class="history_about">
                            echo about
                        </div>
                        <div class="user_comment">
                            <div class="comment_rating">exho star rating</div>
                            <div class="comment_text"> Відгук <?php echo " " . $user_details['name'] . ":"; ?> </div>
                        </div>
                    </div>
                </div>



            </div>
            
            <div class="paragraph"> <span class="text">Освіта</span> </div> 
            <div class="paragraph"> <span class="text">Історія роботи</span> </div> 

        </div>
    </div>

</div>
</div>


<?php echo get_footer(); ?>

