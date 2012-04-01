<?php
$title = replace_lang('<{Homepage Title}>');
$objects = array();
$objects[] = array('js','ajax.js.php', array('id'=>'ajax.js'));
$objects[] = array('css','style_home.css.php',array('id'=>'style_home.css'));
$objects[] = array('css','cusel.css.php', array('id'=>'cusel.css'));



$objects[] = array('js_source','js/cusel.min.js', array('id'=>'cusel.js'));
$objects[] = array('js_source','js/jquery.validate.min.js', array('id'=>'validate.js'));
$objects[] = array('js_source','js/slides.min.jquery.js', array('id'=>'slides.js'));
$objects[] = array('js_source','js/share.js', array('id'=>'share.js'));
$objects[] = array('js_source','js/tools.js', array('id'=>'tools.js'));


$objects[] = array('js','homepage.js.php', array('id'=>'homepage.js'));
$objects[] = array('js','auth.js.php', array('id'=>'auth.js'));
$objects[] = array('js','auth_validation.js.php', array('id'=>'auth_validation.js'));

echo get_header($title,$objects); 
?>
   

        <!-- content -->

        <!-- content cabinet-->
        <div class="content">
            <div class="main_content">
                <div class="slider">
                    <div id="slides" class="slides">
                        <div class="slides_container">
                            <div>
                                <a href="#" title="bird" target="_blank"><img src="<?php echo _img('slide_1.png'); ?>" width="480" height="265" alt="Slide 1"></a>
                                <div class="title_text">УНІКАЛЬНИЙ ЯРМОРОК</div>
                                <div class="maint_text">
                                    Запрошуємо на ярмарок волонтерів. Унікальна подія у Запоріжжі, де кожний зможе знайти того, хто потребує допомоги.
                                    Більш ніж 20 організації попросять допомоги у соціально активних українців. Приходь сам та запрошуй своїх друзів. 
                                    Ярмарок пройде у центрі міста за сприяння благодійних організацій. 

                                </div>
                            </div>
                            <div>
                                <a href="#" title="bird" target="_blank"><img src="<?php echo _img('slide_2.png'); ?>" width="480" height="265" alt="Slide 2"></a>
                                <div class="title_text">БЛАГОДІЙНА ДІЯЛЬНІСТЬ У СЕЛІ</div>
                                <div class="maint_text">
                                    Лікарні та дитячі будинки, інтернати у містах отримують допомогу завдяки волонтерським організаціям та небайдужим українцям, але багато літніх людей потребують допомоги у селі.
                                    Навіть звичайні речі такі, як посадити картоплю збережуть сили та здоров'я літніх людей та зроблять їх щасливими.  

                                </div>
                            </div>
                            <div>
                                <a href="#" title="bird" target="_blank"><img src="<?php echo _img('ball.png'); ?>" width="480" height="265" alt="Slide 3"></a>
                                <div class="title_text">БАНК СПОРТИВНОГО ІНВЕНТАРЮ</div>
                                <div class="maint_text">
                                    Біржа взаємодопомоги “Є Рішення” та лабораторія соціальних інновацій
“Cloudwatcher” пропонує вам та вашим друзям взяти участь у соціальному проекті допомоги дітям з обмеженими можливостями та дітям без батьків.
Сутність проекту: організація збору б/в чи закупка нового спортивного інвентарю для його подальшої передачі дітям. 
                                </div>
                            </div>
                            <div>
                                <a href="#" title="bird" target="_blank"><img src="<?php echo _img('pen.png'); ?>" width="480" height="265" alt="Slide 4"></a>
                                <div class="title_text">СОЦІАЛЬНІ ПЕРЕКЛАДИ</div>
                                <div class="maint_text">

                                    Ціль проекту: сприяти та допомагати професійним перекладачам - інвалідам в отриманні замовлень від комерційних компаній. Проект реалізується Міжднародним Центром Перекладів “Bezgraniz” разом з Лабораторією Соціальних Інновацій.  


                                </div>
                            </div>
                            <div>
                                <a href="#" title="bird" target="_blank"><img src="<?php echo _img('legs.png'); ?>" width="480" height="265" alt="Slide 5"></a>
                                <div class="title_text">ТРЕНІНГИ У ТЕМРЯВІ</div>
                                <div class="maint_text">Вперше в Україні проводяться ексклюзивні тренінги для керівників всіх рівнів.
Головним інструментом тренінгу є повна темрява, тому що тренінги проводяться незрячим персоналом.
                                </div>
                            </div>
                            <div>
                                <a href="#" title="bird" target="_blank"><img src="<?php echo _img('food.png'); ?>" width="480" height="265" alt="Slide 6"></a>
                                <div class="title_text">БАНК ЇЖІ</div>
                                <div class="maint_text">

                                    Системний підхід до проблеми нужденних, яким не вистачає харчів. Для реалізації проекту була проведена попередня робота по створенню мережі НКО, що займається розподіленням “харчової допомоги”.
                                </div>
                            </div>
                            <div>
                                <a href="#" title="bird" target="_blank"><img src="<?php echo _img('disabled.png')?>" width="480" height="265" alt="Slide 7"></a>
                                <div class="title_text">БАНК ОБЛАДНАННЯ ДЛЯ ЛЮДЕЙ З ОБМЕЖЕНИМИ МОЖЛИВОСТЯМИ</div>
                                <div class="maint_text main_text_long">Біржа взаємо допомоги «Є Рішення» запрошує вас завітати до пунктів допомоги людям з обмеженими можливостями і прийняти участь у соціальній програмі з надання спеціалізованної гуманітарної допомоги таким знедоленим українцям. Крім того, запрошуємо вас до конференції з питань поліпшення життя та допомоги інвалідам. 
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="cabinet">

                   <?php echo get_auth_block(); ?>

                    <div class="join_us">
                        <div class="join_us_title_text">ПРИЄДНУЙСЯ</div>
                        <div class="gorizont_line"></div>
                        <div class="who_join">
                            <input type="radio" name="who_join" value="volonter" /> Я можу допомогти</br>
                            <input type="radio" name="who_join" value="need_help" /> Мені потрібна допомога</br>
                            <div><input class="proceed" type="submit" name="proceed" value="Продовжити"/></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- content cabinet END -->

            <!-- content search -->
            <div class="search">
               
                <div class="search_content">
                    <div class="search_select redSelect">
                        <select>
                            <option value="search">Пошук того, хто допоможе</option>
                        </select>
                    </div>
                    <div class="search_noselect">
                        <input  class="input_search activ" type="text" size="24" name="search_volonet"/>
                        <div class="search_button"> <input  type="submit" value="Пошук"/> </div>
                    </div> 

                </div>
        
            </div>
            <!-- content search END -->

            <!-- content 3 colum-->
            <div class="center">
                <div class="left_colum form_center">
                    <div class="content_form">
                        <div class="name_form_left">Тому, хто потребує допомоги</div>
                        <div class="image"></div>
                        <div class="text"><p>Змалку батьки, суспільство нас вчать, 
                                що треба самим про себе дбати. І це цілком нормально,
                                але настають часи, коли кожен з нас потребує подтримки
                                з боку оточуючих нас людей. Ми відчуваємо, що невзмозі
                                впоратися самостійно. Допомогти можуть родичі, друзі чи
                                незнаоймці. Спробуйте відкрите серце людям і спитати про допомогу.
                                Не витрачате час на “чи варто?” або “це вірне рішення?”
                                В Україні багато доброзичливих людей, які просто не знають, як і
                                чим можуть допомогти. Отже, Ви знаходитесь в 3 кроках від вирішення 
                                проблеми, а саме, вам необхідно відкрити серце, 
                                <a href="">зареєструватися</a> на цьому сайті і <a href="">
                                    розмістити прохання про допомогу.</a> <a href="">Детальніше ...</a></p></div>
                        <div class="button"><a href="#"><span>МЕНІ ПОТРІБНА ДОПОМОГА</span></a></div>

                    </div>
                </div>
                <div class="form_center ">
                    <div class="content_form center_colum">
                        <div class="name_form_center">Тому, хто бажає допомоги</div>
                        <div class="image"></div>
                        <div class="text"><p>В сучасному українському суспільстві досить гостро стоять економічні, політичні, соціальні та інші проблеми. За усі роки Незалежності Україна ще не наблизилася до їх вирішення. Населення мріє про поліпшення життя. <a href="">Ми вважаємо</a>, що настав час змін. Кожен з нас може зроби свій внесок в вирішення проблем українського суспільства. Що я має на увазі? Адже, суспільство це я, ви ... МИ. Кожен з нас взмозі допомогти сусіду, бабусі, подружці та іншим. Отже, зробіть свій внесок в становлення Української Незалежної Держави. Ви знаходитесь в 3 кроках від цього, а саме, вам необхідно відкрити серце, <a href="">зареєструватися</a> на цьому сайті і <a href="">розмістити заявку про бажання допомогти</a>. <a href="">Детальніше ...</a></p></div>
                        <div class="button"><a href="">Я МОЖУ ДОПОМОГТИ</a></div>
                    </div>
                </div>
                <div class="form_center right_colum">
                    <div class="content_form">
                        <div class="name_form_right">Благочинність</div>
                        <div class="image"></div>
                        <div class="text"><p>Стровення міцьного суспільства і сприяння зростання взаємодопомоги потребують значних зусиль з боку волонтерів. Ми звертаємося до всіх бажаючих встановити дружніх відносин, сприяти розповсюдженню ідеї                    “Допоможи іншому”, який полюгає у бажанні допомогти іншіому якщо, хтось тобі допомог (або не допоміг), а також вирішення сучасних українських   проблем. <a href="">Детальніше ...</a></p></div>
                        <div class="button_right_colum"><a href="#">ПОЖЕРТВА</a></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- 3 colum END-->
        <!-- content END -->                    



<?php echo get_footer(); ?>

                    