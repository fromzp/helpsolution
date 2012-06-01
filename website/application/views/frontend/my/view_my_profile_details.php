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
                    <img src="<?php if (!empty($user_details['image']))
                        echo base_url() . $this->config->item('upload_url') . $user_details['image']; ?>"  width="<?php echo $user_details['image_width'] ?>" height="<?php echo $user_details['image_height'] ?>" alt="Image">
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
                <?php
                $help_count = array();
                $help_count['0'] = array(
                    "stars" => "1",
                    "user_rate" => "5",
                    "title" => "Допомогали копали",
                    "image" => _img('slider_img_2.png'),
                    "description" => "Як добро було о восьмiй встати та кортоплю покопати",
                    "report_description" => "Дуже сподобалося"
                );
                $help_count['1'] = array(
                    "stars" => "3",
                    "user_rate" => "4",
                    "title" => "Допомогали будували",
                    "image" => _img('slider_img_4.png'),
                    "description" => "Я кортоплю докопали вiдразу погреб здубували",
                    "report_description" => "Дуже сподобалося"
                );

                $user_details['id_projects'] = $help_count;

                foreach ($user_details['id_projects'] as $value) {

                    echo '
          <div class="history">
                    <div class="project_photo">
                        <div class="history_photo"> <img src=" ' . $value['image'] . ' " alt=" ' . $value['title'] . ' "  heigh="90" width="150"> </div>
                        <div class="photo_info"> <span>' . $value['title'] . '</span> <a href=""></a></div>
                    </div>
                    <div class="history_fild">
                    <div class="history_rating">';
                    $num = (int) $value['stars'];
                    for ($i = 1; $i <= $num; $i++) {
                        echo ' <img src="' . _img('star.png') . '" alt="альтернативный текст"> ';
                    }
                    echo '</div>
                            <div class="history_about">  ' . $value['description'] . '  </div>
                        <div class="user_comment">
                            <div class="comment_rating">';
                    $num = (int) $value['user_rate'];
                    for ($i = 1; $i <= $num; $i++) {
                        echo ' <img src="' . _img('star.png') . '" alt="альтернативный текст"> ';
                    }
                    echo '</div>
                            <div class="comment_text"> Відгук ' . $user_details['name'] . ': ' . $value['report_description'] . ' </div>
                        </div>
                    </div>
                </div>';
                }
                ?>


            </div>
        </div>
        <div class="base_skills">
            <div class="paragraph"> <span class="text">Освіта</span> </div> 
            <div class="educetion">
                <?php
                if (!empty($user_details['education'])) {
                    echo $user_details['education'];
                }
                ?>                
            </div>           




            <div class="paragraph"> <span class="text">Історія роботи</span> </div> 
            <div class="work_where">
                <?php
                if (!empty($user_details['work'])) {
                    echo $user_details['work'];
                }
                ?>

            </div>
        </div>
    </div>

</div>
</div>


<?php echo get_footer(); ?>

