            <div class="header_menu">

                <div class="main_menu">
                    <ul>
                        <li><a id="href_market" href="menu-mutual-exchange.html">БІРЖА ВЗАЄМОДОПОМОГИ</a></li> 
                        <li><a id="href_need_help" href="menu-my-volunteers.html">ТІ, ХТО МОЖУТЬ МЕНІ ДОПОМОГТИ</a></li>
                        <li><a id="href_can_help" class="active_page style_menu" href="profile">Я МОЖУ ДОПОМОГТИ</a></li>
                        <li><a id="href_achiv" class="style_menu" href="menu-my-achievements.html">МОЇ ЗДОБУТКИ</a></li>

                    </ul>
                </div>

                <div class="user_panel">

                    <div class="login">
                                          <div class="drop_logout">
                        <div class="logout"><a href="/ajax/auth/logout">Logout</a></div>
                    </div>
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
                            <li><a href="menu-mutual-exchange.html">Біржа</a><div></div></li>
                            <li><a href="my-volunteer-applications.html">Мої заявки "Можу допомогти"</a><div></div></li>
                            <li><a href="my-ad.html">Мої оголошення</a><div></div></li>
                        </ul>

                        <ul for="href_need_help" style="display: none;">
                            <li><a href="">Угоди/Звiти</a><div ></div></li>                  
                        </ul> 

                        <ul for="href_can_help" class="active_menu" >
                            <li><a href="<?php echo(site_url('my/profile')) ?>">Мій профіль</a><div class="<?php echo $page=='profile'?'current_page':''; ?>"></div></li>                  
                            <li><a href="<?php echo(site_url('my/edit_profile')) ?>">Кабiнет</a><div class="<?php echo $page=='edit_profile'?'current_page':''; ?>"></div></li> 
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

