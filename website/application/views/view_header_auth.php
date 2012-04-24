<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <title><?php echo $title; ?></title>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> 

        <script type="text/javascript">
            var base_url='<?php echo base_url(); ?>';
        </script>

        <?php
        if (isset($objects)) {
            echo $objects;
        }
        ?>
    </head>
    <body class="body">

        <!-- header -->
        <div class="header"> 


            <div class="header_logo">      	

            </div>
            <div class="header_menu">

                <div class="main_menu">
                    <ul>
                        <li><a id="href_market" href="menu-mutual-exchange.html">БІРЖА ВЗАЄМОДОПОМОГИ</a></li> 
                        <li><a id="href_need_help" href="menu-my-volunteers.html">ТІ, ХТО МОЖУТЬ МЕНІ ДОПОМОГТИ</a></li>
                        <li><a id="href_can_help" class="active_page style_menu" href="menu-volunteer.html">Я МОЖУ ДОПОМОГТИ</a></li>
                        <li><a id="href_achiv" class="style_menu" href="menu-my-achievements.html">МОЇ ЗДОБУТКИ</a></li>

                    </ul>
                </div>

                <div class="user_panel">
                    <div class="login">
                        <div class="user_logo"></div>
                        <div class="user_name"><?php echo $user_details['name'] . " " . $user_details['lastname']; ?></br> <span>(alexrostova)</span></div>
                        <div class="info_row"><a href=""></a></div>
                    </div>
                    <div><a class="message" href=""></a><span class="messag">1</span></div>
                    <div><a class="settings" href=""></a></div>
                    <div><a class="help" href=""></a></div>
                </div>

                <div class="menu">
                    <div class="menu_listing">

                        <ul  for="href_market" style="display: none;">
                            <li><a href="menu-mutual-exchange.html">Біржа</a><div "></div></li>
                            <li><a href="my-volunteer-applications.html">Мої заявки "Можу допомогти"</a></li>
                            <li><a href="my-ad.html">Мої оголошення</a></li>
                        </ul>

                        <ul for="href_need_help" style="display: none;">
                            <li><a href="">Угоди/Звiти</a><div ></div></li>                  
                        </ul> 

                        <ul for="href_can_help" class="active_menu" >
                            <li><a href="">Мій профіль</a><div class="current"></div></li>                  
                        </ul>   

                        <ul for="href_achiv"  style="display: none;">
                            <li><a href="">Звiти</a><div ></div></li>                  
                        </ul>  

                    </div>

                    <div class="search">
                        <select>
                            <option value="none" selected="selected">Пошук волонтерів</option>
                        </select>
                        <div class="search_field"><input type="text" name="" value="" size="50px" /></div>
                        <div class="button_search"><input type="submit" value="Пошук" name="" /></div>
                    </div> 
                </div>

            </div>


        </div>
        <!-- header end-->



        <script>
            $(document).ready(function()
            {
                
                $('.main_menu').find('a').live('mouseenter', function()
                {
                    var menu_id=$(this).attr('id');
                    activ_menu(menu_id);
                }).live('mouseleave', function()
                {
                    $(this).removeClass( 'active' );
                });
                
                $('.header_menu').live('mouseleave',(function()
                {
                    $('.menu_listing > ul').css('display','none'); 
                    $('.active_menu').css('display','inline');    
                }));
                
            });
                                        
            function activ_menu( menu_id )
            { 
                $(this).addClass( 'active' );
                $('.menu_listing > ul').css('display','none');                
                $("ul[for=" + menu_id + "]").css('display','inline');        
            }

        </script>