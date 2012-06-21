/*<style type="text/css">
    style_profile.css*/
body{
    margin-top: 0;
    
}
.page { 
    width: 1020px;
    margin-left: auto;
    margin-right: auto;
    height: 1740px;
    margin-top: 0;
    font-family: Arial;
    overflow: visible;
   
}

/*Header*/
.page .header .header_logo {
    background: url(<?php echo _img('logo_header.png'); ?>) no-repeat scroll 0 0 transparent;
    height: 90px;
    width: 1020px;

}
.page .header .header_menu {
    height: 108px;
    width: 1020px;
}

.page .header .header_menu .main_menu {
    float: left;
    height: 38px;
    width: 63%;
}


.page .header .header_menu .main_menu ul {
    margin-top: 0;
    margin-left: -5px;
    padding: 0;
    list-style-type: none;
}

.page .header .header_menu .main_menu li a {
    -moz-border-radius-bottomleft: 10px 10px 0 0;
    -webkit-border-bottom-left-radius: 10px 10px 0 0;
    -khtml-border-bottom-left-radius: 10px 10px 0 0;
    background-color: #464545;
    border-radius: 10px 10px 0 0;
    color: white;
    float: left;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 8pt;
    font-weight: bold;
    height: 25px;
    margin-left: 5px;
    margin-top: 0;
    padding: 5px 0 0;
    height: 31px;
    text-align: center;
    width: 23%;
    text-decoration: none;
    cursor: pointer;
    behavior: url(../css/PIE.htc);

    border: 1px outset #BEBEBE;

}
.page .header .header_menu .main_menu li .style_menu{
    padding-top: 12px;    
}
.page .header .header_menu .main_menu li .active{
    background-color: #78adcc;
}
.page .header .header_menu .main_menu li a:hover {
    background-color: #78adcc;
}
.page .header .header_menu .user_panel1 {
    float: right;
    height: 25px;
    padding: 3px 0px 10px;
    width: 32%;
    
}

.page .header .header_menu .user_panel1 .login1 .user_logo1 {
    background: url("../img/icon_people.png") no-repeat scroll 0 0 transparent;
    width: 30px;
    height: 30px;
    background-color: white;
    float: left;
}

.page .header .header_menu .user_panel1 .login1 .user_name1 ul li {
    list-style-type: none;
    background-color: blue;
    cursor: pointer;

}
.page .header .header_menu .user_panel1 .login1 .user_name1 {
    float: left;
    width: 160px;
    font-size: 9pt;
    margin-top: 5px;

}
.page .header .header_menu .user_panel1 .login1 .info_row1 {
    background: url("../img/icon_row.png") no-repeat scroll 0 0 transparent; 
    width: 4px;
    height: 8px;
    float: left;
    padding: 5px;
    margin-top: 10px;
    cursor: pointer;

}
.page .header .header_menu .user_panel1 .message1 {
    background: url("../img/user_mail.png") no-repeat scroll 0 0 transparent; 
    width: 15px;
    height: 14px;
    float: left;
    padding: 5px;
    margin-top: 10px;
    cursor: pointer;
    margin-left: 10px;
}
a{
    outline: none;
}
.page .header .header_menu .user_panel1 .messag1{
    background: url("../img/icon_info_massage.png") no-repeat scroll 0 0 transparent;
    color: white;
    float: left;
    font-size: 9pt;
    height: 20px;
    margin-left: -10px;
    padding-left: 6px;
    padding-top: 3px;
    position: absolute;
    width: 20px;

}
.page .header .header_menu .user_panel1 .settings1{
    background: url("../img/user_gear.png") no-repeat scroll 0 0 transparent; 
    width: 15px;
    height: 14px;
    float: left;
    margin-top: 7px;
    padding: 5px;
    cursor: pointer;
    margin-left: 10px;
}
.page .header .header_menu .user_panel1 .help1{
    background: url("../img/user_none.png") no-repeat scroll 0 0 transparent; 
    width: 12px;
    height: 14px;
    float: left;
    padding: 5px;
    margin-top: 10px;
    cursor: pointer;
    margin-left: 10px;
}
.page .header .menu1{
    width: 100%;
    margin-top: 0;
    height: 45px;
    background-color: #78adcc;
    float: left;
    -webkit-box-shadow: 0 0 2px 1px white;
    -moz-box-shadow: 0 0 2px 1px white;
    box-shadow: 0 0 2px 1px white;
}
.page .header .menu1 .menu_listing1{
    float: left;
    width: 61%;
}
.page .header .menu1 .menu_listing1 ul{
    float: left;
    margin-top: 0;
    width: 100%;
    padding-top: 15px;
    color: white;
    font-size: 10pt;
    padding-left: 0;
    list-style-type: none;
}

.page .header .menu1 .menu_listing1 ul li{
    float: left;
    width: 170px;
}

.page .header .menu1 .menu_listing1 ul li a{
    text-align: center;
    width: 182px;
}
.page .header .menu1 .menu_listing1 .current{
    background:  url("../img/menu_triangle.png") no-repeat scroll 0 0 transparent; 
    width: 26px;
    height: 23px;
    margin-top: 29px;
    margin-left: 78px;
    position: absolute;
}

.page .header .menu1 .menu_listing1 a{
    float: left;
    color: white;
    text-decoration: none;
    outline: none;
    cursor: pointer;
}



.page .header .search1{
    float: right;
    width: 39%;
    padding-top: 11px;
}
.page .header .search1 select{
    background: url("../img/search_select.png") no-repeat scroll 0 0 transparent;
    border: medium none;
    float: left;
    font-size: 7pt;
    height: 24px;
    letter-spacing: -1px;
    outline: medium none;
    padding: 5px 0;
    width: 96px;
}
.page .header .search1 .search_field1 input{
    border: 1px inset white;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    float: left;
    margin-left: 5px;
    width: 180px;
    -webkit-box-shadow: #666 0 0 2px;
    -moz-box-shadow: #666 0 0 2px;
    box-shadow: #666 0 0 2px;
}
.page .header .search1 .button_search1 input{
    background: url("../img/search_button.png") no-repeat scroll 0 0 transparent;
    border: medium none;
    color: white;
    font-size: 8pt;
    font-weight: bold;
    height: 22px;
    margin-left: 5px;
    outline: medium none;
    width: 92px;
    cursor: pointer;
}


/*End header*/

.page .content{
    background: #f0f0f0;
    height: auto;
    min-height: 1260px;
    margin-top: 0;

}
.page .profile{
    background: #FEFFF0;
    min-height: 1440px;
}

.page .exchange{
    background: #F9F8F3;
}


.text_menu a{
    color: #f0f0f0;
    cursor: pointer;
    float: left;
    font-size: 11pt;
    font-weight: bold;
    margin: 15px;
    text-decoration: none;
    font-family: Trebuchet MS;
}
.menu .active{
    background: none repeat scroll 0 0 #5FA73F;
    float: left;
    height: 50px;
    width: 129px;
}

.menu .line_profile{
    width: 483px
}
.search_form{
    float: right;
    height: 31px;
    margin-top: 30px;
    width: 500px;
}
.search_profile{
    width: 540px;
}

.search_form .fild_search{
    background: #E7E7E7;
    float: left;
    height: 20px;
    width: 320px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url("../PIE.htc");
} 
.search_form .profile_fild_search{
    width: 360px;
}
.text_menu span{
    color: #F0F0F0;
    float: left;
    margin-top: 12px;
}

.contacts{
    float: right;
    font-size: 10pt;
    margin-right: 60px;
    margin-top: -10px;
    text-align: right;
}
.copyright{
    font-size: 9pt;
    margin-top: 45px;
    text-align: center;
}

.login{
    background: url("../img/content_field_login_back.png") repeat scroll 0 0 transparent;
    height: 180px;
    padding: 30px 40px 34px 90px;
    width: 225px;
}
.login_form span{
    font-size: 10pt;
    margin-left: 10px;
}
.login_form{
    color: #8A8A8A;
    float: left;
    padding-left: 10px;
    width: 360px;
}
.button_login input{
    background: url("../img/content_login_button.png") repeat scroll 0 0 #E7E7E7;
    color: #F0F0F0;
    cursor: pointer;
    height: 33px;
    margin-bottom: 10px;
    width: 173px;;
    -webkit-border-radius: 12px 8px 6px 8px;
    -moz-border-radius: 12px 8px 6px 8px;
    border-radius:12px 8px 6px 8px;
    behavior: url("../PIE.htc");

}
.login .fild {
    width: 170px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url("../PIE.htc");
}
.login ._text{
    margin-top: 7px;
}
.login .box_text{
    font-size: 10pt;
    margin-bottom: 5px;
    margin-left: -5px;
    margin-top: 5px;
}
.login_form .login .text_form a{
    color: #48AACC;
    margin-left: 25px;
    margin-top: 20px;
    font-size: 10pt;
    text-decoration: none;
}
.mission_form{
    background: none repeat scroll 0 0 #E8D8D9;
    float: right;
    height: 240px;
    margin-right: 0;
    margin-top: 20px;
    padding-left: 50px;
    width: 680px;
}
.mission_form .name_form{
    color: #1D3C4E;
    font-family: Trebuchet MS;
    font-size: 20pt;
    margin-left: 100px;
    padding: 20px;
    text-align: center;
    width: 580px;
}
.bracket_start{
    background: url("../img/quotes_up.png") no-repeat scroll 0 0 transparent;
    float: left;
    height: 110px;
    width: 40px;
}
.bracket_end{
    background: url("../img/quotes_down.png") repeat scroll 0 0 transparent;
    height: 30px;
    margin-left: 170px;
    margin-top: -35px;
    width: 30px;
}
.text_mission p{
    font-family: Trebuchet MS;
    font-size: 9pt;
    font-style: italic;
    line-height: 2;
    padding: 6px;
    text-align: justify;
    width: 574px;
}
.text_content {
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 1px;
}
.content .form_center{
    background: none repeat scroll 0 0 #5FA73F;
    float: left;
    height: 630px;
    width: 352px;
    font-family: Trebuchet MS;
}
.content .center_colum{
    background: none repeat scroll 0 0 #6FA8C9;
    margin-left: 25px;
   
}
.content .right_colum{
    background: none repeat scroll 0 0 #CF70BB;
    margin-left: 25px;
}
.form_center .content_form{
    padding: 40px;
}
.form_center .content_form .name_form{
    font-size: 20pt;
    height: 65px;
    text-align: right;
}
.form_center .content_form .text{
    font-size: 10pt;
    height: 325px;
    text-indent: 20pt;
}
.form_center .content_form .image{
    background: url("../img/content_foto_left.png") repeat scroll 0 0 transparent;
    height: 107px;
    margin-left: 5px;
    margin-top: 10px;
    width: 268px;
}
.center .center_colum .image{
    background: url("../img/content_foto_medium.png") repeat scroll 0 0 transparent;
    width: 268px;
    height: 107px;
}
.center .right_colum .image{
    background: url("../img/content_foto_right.png") repeat scroll 0 0 transparent;
    width: 268px;
    height: 107px;
}
.form_center .content_form .text a{
    color: white;
}
.form_center .content_form .button {
    background: url("../img/content_help_button.png") repeat scroll 0 0 transparent;
    cursor: pointer;
    height: 23px;
    margin-left: 60px;
    padding: 10px 10px 10px 13px;
    width: 118px;
}
.form_center .content_form ._float{
    padding-left: 25px;
    width: 107px 
}
.form_center .content_form .button a{
    color: white;
    text-decoration: none;
}
.content .top{
    height: 267px;
    padding: 20px 40px;
    width: 1120px;
}
.content .profilecontent{
    height: auto;  
}
.content .center{
    float: left;
    height: auto;
    width: 965px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 53px;
}
.form_center .content_form .button span{
    width: 50px;
}
.content .bottom{
    float: left;
    height: auto;
    padding: 25px 27px 15px 53px;
    width: 1120px;
}
.content .bottom .flash_mob{
    background: #FFFFF0;
    width: 1105px;
    height: 247px;
    border: 1px solid;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    behavior: url("../PIE.htc"); 
}
.content .bottom .flash_mob .image{
    background: url("../img/content_foto_bottom.png") repeat scroll 0 0 transparent;
    float: left;
    height: 194px;
    margin-left: 25px;
    margin-top: 25px;
    width: 294px;
}
.content .bottom .flash_mob .text_content{
    float: right;
    padding: 25px;
    width: 700px;
}

.content .bottom .flash_mob .text_content .name_form{
    color: #EB5361;
    font-size: 18pt;
}
.content .bottom .flash_mob .text_content .text{
    font-family: Trebuchet MS;
    font-size: 9pt;
    height: 120px;
    line-height: 2;
    padding: 50px 0 0;
}
.content  .social{
    float: right;
    height: 25px;
    padding: 10px;
    width: 120px;
}
.content .social .social_button{
    float: left;
    height: 14px;
    padding: 5px 0 4px 10px;
    width: 17px;
}
.content  .social .face_book{
    background: url("../img/fb_button.png") no-repeat scroll 0 0 transparent;
}
.content  .social .twitter{
    background: url("../img/tw_button.png") no-repeat scroll 0 0 transparent;
}
.content  .social .vkontakte{
    background: url("../img/vk_button.png") no-repeat scroll 0 0 transparent;
}
.content  .social .lin{
    background: url("../img/lin_button.png") no-repeat scroll 0 0 transparent;
}



.top .profile_narrow{
    background: #F0F0F0;
    width: 265px;
    height: 615px;
    float: left;
    border: 1px solid;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    behavior: url("../PIE.htc"); 
}
.top .profile_narrow .label{
    background: url("../img/content_photo_label.png") no-repeat scroll 0 0 transparent;
    color: white;
    font-family: Trebuchet MS;
    font-size: 8pt;
    font-style: italic;
    height: 77px;
    margin-left: -15px;
    margin-top: -15px;
    padding: 24px 10px 10px;
    position: absolute;
    width: 77px;
}
.top .profile_narrow .content_form{
    padding: 20px;
    color: #454444;
}
.top .profile_narrow .content_form .photo{
    background: url("../img/page_photo_big15.png") no-repeat scroll 0 0 transparent;
    width: 227px;
    height: 270px;
}
.top .profile_narrow .content_form .title{
    line-height: 1.5;
    padding: 0 10px 5px;
    font-weight: bold;
    text-align: center;
}
.rating{
    padding: 10px;
}
.slider .information_slider{

    padding: 5px;
}
.rating .star_raiting{
    height: 23px;
    padding-left: 45px;
    padding-right: 45px;
    width: 120px;
}
.content .slider_raiting{
    padding-left: 10px; 
}
.rating .star_raiting .star{
    background: url("../img/content_icon_star.png") no-repeat scroll 0 0 transparent;
    float: left;
    height: 23px;
    width: 23px;
}
.rating a{
    color: #454444;
    font-size: 9pt;
    padding-left: 15px;
}
.profile_narrow .content_form  .list_menu .menu{
    background: url("../img/background_text_profile.png") no-repeat scroll 0 0 transparent;
    height: 25px;
    text-align: center;
    width: 224px;
    margin-top: 1px;
}
.profile_narrow .content_form .list_menu .menu  a{
    color: white;
    font-size: 11pt;
    font-weight: bold;
    text-decoration: none;
}
.content .top .information_top_right{
    float: right;
    height: 635px;
    width: 840px;
    color: #454444;
}
.information_top_right .information_block{
    float: left;
    padding: 0 0 0 20px;
    width: 680px;
}
.information_top_right .information_block .content_information .title{
    color: #48AACC;
}
.information_top_right .information_block .content_information .text{
    font-family: Trebuchet MS;
    font-size: 10pt;
    font-style: italic;
    font-weight: bold;
} 
.information_top_right .information_block .information_profile .icon{
    width: 18px;
    height: 15px;
    float: left;
}
.information_top_right .information_block .information_profile .year{
    background: url("../img/content_icon_year18.png") no-repeat scroll 0 0 transparent;
}
.information_top_right .information_block .information_profile .family{
    background: url("../img/content_icon_famaly.png") no-repeat scroll 0 0 transparent;
}
.information_top_right .information_block .information_profile .help{
    background: url("../img/content_icon_help.png") no-repeat scroll 0 0 transparent;
}
.information_top_right .information_block .information_profile .city{
    background: url("../img/content_icon_city.png") no-repeat scroll 0 0 transparent;
}


.information_top_right .information_block .information_profile .info_text{
    float: left;
    font-size: 11pt;
    font-weight: bold;
    margin-left: 10px;
    width: 780px
}
.information_top_right .information_block .information_profile .info_text span{
    font-family: Trebuchet MS;
    font-size: 10pt;
    font-style: italic;
    font-weight: normal;
}
.information_top_right .slider{
    float: left;
    padding-top: 10px;
    width: 700px
}
.information_top_right .slider .title{
    color: #48AACC;
    padding-bottom: 10px;
    padding-left: 20px;
}
.information_top_right .slider .slider_form{
    background: none repeat scroll 0 0 #F0F0F0;
    border: 1px solid;
    float: left;
    margin-left: 20px;
    height: 350px;
    width: 190px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    behavior: url("../PIE.htc"); 
}
.information_top_right .slider .slider_form  .content_slider{
    padding: 10px;
}
.information_top_right .slider .slider_form  .content_slider .img{
    background: url("../img/slider_img_1.png") no-repeat scroll 0 0 transparent;
    width: 155px;
    height: 110px;
}
.information_top_right .slider .slider_form .content_slider .two{
    background: url("../img/slider_img_2.png") no-repeat scroll 0 0 transparent;
}
.information_top_right .slider .slider_form .content_slider .three{
    background: url("../img/slider_img_3.png") no-repeat scroll 0 0 transparent;
}
.information_top_right .slider .slider_form .content_slider .four{
    background: url("../img/slider_img_4.png") no-repeat scroll 0 0 transparent;
}
.information_top_right .slider .slider_form  .content_slider .img_information{
    background: url("../img/slider_img_background_coment.png") repeat scroll 0 0 transparent;
    height: 24px;
    margin-top: 87px;
    position: absolute;
    text-align: center;
    width: 154px;
}
.information_top_right .slider .slider_form  .content_slider .img_information span{
    font-size: 8pt;
    color: white;
    float: left;
}
.information_top_right .slider .slider_form  .content_slider .img_information a{
    font-size: 7pt;
    color: white;
}
.information_top_right .slider .slider_form  .content_slider .text_feedback {
    float: left;
    font-size: 9pt;
    font-style: italic;
    height: 75px;
}
.information_top_right .slider .slider_form  .content_slider  .text_feedback_profile {
    float: left;
    font-size: 9pt;
    font-style: italic;
    padding-top: 5px;
}
.information_top_right .slider .slider_form  .content_slider .details{
    color: #48AACC;
    padding-left: 25px
}
.information_top_right .slider .row_left{
    background: url("../img/slider_row_left.png") no-repeat scroll 0 0 transparent;
    cursor: pointer;
    float: left;
    height: 26px;
    margin-top: 180px;
    width: 19px;
}
.information_top_right .slider .right_row{
    background: url("../img/slider_row_right.png") no-repeat scroll 0 0 transparent;
    float: right;
    cursor: pointer;
    height: 26px;
    margin-top: 180px;
    padding: 5px;
    width: 19px;
}
.center .left_colum_center{
    float: left;
    width: 265px;
    padding-left: 0px;
}
.center .left_colum_center .button_help{
    background: url("../img/big_red_button.png") no-repeat scroll 0 0 transparent;
    float: left;
    height: 67px;
    margin-left: 11px;
    margin-top: 10px;
    margin-bottom: 10px;
    width: 223px;
    cursor: pointer;
}
.left_colum_center .statistics{
    background: none repeat scroll 0 0 #F0F0F0;
    border: 1px solid;
    float: left;
    height: 230px;
    margin-left: -10px;
    padding: 0 15px 15px;
    width: 235px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    behavior: url("../PIE.htc"); 

}
.center .title{
    color: #48AACC;
    padding-bottom: 10px;
    padding-top: 10px;
    width: 230px;
}
.statistics .title{
    text-align: center;
} 

.statistics .content_statistics  .text{
    float: left;
    font-size: 11pt;
    font-weight: bold;
    width: 240px;
}
.statistics .content_statistics  .text span{
    font-family: Trebuchet MS;
    font-size: 10pt;
    font-weight: normal;
}
.statistics .content_statistics .block_statistics{
    float: left;
    padding-top: 10px;
}
.center .right_colum_center{
  
    float: left;
    height: auto;
    overflow: visible;
    padding-left: 10px;
    width: 680px;
}
.center .right_colum_center .block{
    float: left;
    height: auto;
    width: 680px;
   
}
.center .right_colum_center .block .left{
    float: left;
    height: auto;
    width: 325px;
}
.center .right_colum_center .block .right{
    float: left;
    height: auto;
    width: 310px;
}
.center .right_colum_center .text{
    float: left;
    font-size: 11pt;
    font-weight: bold;
    width: 310px;
}
.center .right_colum_center .text span{
    font-size: 11pt;
    font-style: italic;
    font-weight: normal
}
.center .right_colum_center .deal .text{
    font-weight: normal;
    width: 690px;
}
.center .right_colum_center .deal .text a{
    color: #48AACC;
    margin-left: 10px;
    font-size: 10pt;
}
.bottom_media{
    float: left;
    height: 420px;
    padding-left: 53px;
    width: 995px;
}


.bottom_media .block_madia{
    background: none repeat scroll 0 0 #F0F0F0;
    border: 1px solid;
    border-radius: 20px 20px 20px 20px;
    float: left;
    height: 160px;
    margin-top: 15px;
    padding: 15px;
    width: 870px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    behavior: url("../PIE.htc"); 
}
.bottom_media .block_madia .title{
    color: #48AACC;
}
.bottom_media .block_madia .content_media .media{
    background: url("../img/bottom_madia_img_1.png") no-repeat scroll 0 0 transparent;
    cursor: pointer;
    float: left;
    height: 137px;
    margin-left: 37px;
    width: 189px;
}
.bottom_media .block_madia .content_media .two_photo{
    background: url("../img/bottom_madia_img_2.png") no-repeat scroll 0 0 transparent;
}
.bottom_media .block_madia .content_media .three_photo{
    background: url("../img/bottom_madia_img_3.png") no-repeat scroll 0 0 transparent;
}
.bottom_media .block_madia .content_media .four_photo{
    background: url("../img/bottom_madia_img_4.png") no-repeat scroll 0 0 transparent;
}
.bottom_media .block_madia .content_media .five_photo{
    background: url("../img/bottom_madia_img_5.png") no-repeat scroll 0 0 transparent;
}
.bottom_media .block_madia .content_media .two_video{
    background: url("../img/bottom_madia_img_7.png") no-repeat scroll 0 0 transparent;
}
.bottom_media .block_madia .content_media .three_video{
    background: url("../img/bottom_madia_img_8.png") no-repeat scroll 0 0 transparent;
}
.bottom_media .block_madia .content_media .four_video{
    background: url("../img/bottom_madia_img_9.png") no-repeat scroll 0 0 transparent;
}
.bottom_media .block_madia .content_media .five_video{
    background: url("../img/bottom_madia_img_10.png") no-repeat scroll 0 0 transparent;
}
.bottom_media .block_madia .content_media .first_video{
    background: url("../img/bottom_madia_img_6.png") no-repeat scroll 0 0 transparent;
}
.bottom_media .block_madia .content_media{
    height: 131px;
    padding: 10px 0;
    width: 875px;
}
.bottom_media .block_madia .content_media .first{
    margin-left: 0px;
}
.exchange .left_colum_content{
    float: left;
    height: auto;
    padding: 20px 0 0 40px;
    width: 300px
}
.exchange .left_colum_content .category{
    background: none repeat scroll 0 0 #F0F0F0;
    border: 1px solid;
    float: left;
    height: 380px;
    font-family: arial;
    width: 280px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url("../PIE.htc"); 
}
.left_colum_content .category .content_category{
    padding: 10px;
    color: #5B5A5A;
}
.left_colum_content .category .content_category .title{
    color: #3B4F54;
    font-weight: bold;
    padding-bottom: 8px;
    padding-top: 8px;
    font-size: 10pt;
}
.left_colum_content .category .content_category .choice{
    font-size: 10pt;
}
.left_colum_content .category .content_category .choice span{
    margin-left: 5px;
}
.left_colum_content .stock_block .stock{
    float: left;
    width: 282px;
    height: 270px;
    padding-top: 10px;
}
.left_colum_content .stock_block .stock .title{
    text-align: center;
    color: #48AACC;
}
.left_colum_content .stock_block .stock .img{
    background: url("../img/page_mine_img.png") no-repeat scroll 0 0 transparent;
    width: 282px;
    height: 180px;
   
}
.left_colum_content .stock_block .stock .block_two{
    background: url("../img/page_mine_img_6.png") no-repeat scroll 0 0 transparent;
}
.left_colum_content .stock_block .stock .block_three{
    background: url("../img/page_mine_img_7.png") no-repeat scroll 0 0 transparent;
}
.left_colum_content .stock_block .stock .text{
    font-size: 10pt;
    font-family: Arial;
    color: #5B5A5A;
}
.left_colum_content .stock_block .stock .text a{
    color: #48AACC;
}
.left_colum_content .stock_block{
    float: left;
    height: 850px;
    width: 285px;
}
.right_colum_content{
    float: right;
    padding: 20px 40px 0 0;
    width: 820px;
}
.right_colum_content .help_search_block{
    float: left;
    width: 820px;
    height: auto;
}
.right_colum_content .help_search_block .help_form_tabs{
    width: 820px;
    height: 30px;
    float: left;
}
.right_colum_content .help_search_block .help_form_tabs .tab_button{
    border: 1px solid #598644;
    float: left;
    font-size: 10pt;
    height: 25px;
    padding-top: 5px;
    text-align: center;
    width: 270px;
    -webkit-border-radius: 5px 5px 0 0;
    -moz-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
    behavior: url("../PIE.htc"); 
    cursor: pointer;
}
.right_colum_content .help_search_block .help_form_tabs .active_tab_button{
    background: none repeat scroll 0 0 #F0F0F0;
   
    font-family: arial;
    font-weight: bold;
    position: relative;
    border-bottom: none;
}
.right_colum_content .help_search_block .help_form_tabs .application{
    margin-left: 5px;
}

.right_colum_content .help_search_block .content_search_block{
    background: none repeat scroll 0 0 #F0F0F0;
    border: 1px solid;
    float: left;
    font-family: arial;
    height: auto;
    padding: 10px;
    width: 800px;;
}
.right_colum_content .help_search_block .content_search_block .search_help{
    float: left;
    width: 800px;
}
.right_colum_content .help_search_block .content_search_block .search_help a{
    color: #5B5A5A;
    float: right;
    padding-bottom: 10px;
}
.right_colum_content .help_search_block .content_search_block .title_search{
    margin-bottom: 10px;
    font-size: 11pt;
    font-weight: bold;
    color: #5B5A5A;
}
.right_colum_content .help_search_block .content_search_block .title_search a{
    font-weight: normal;
    text-decoration: none;
}
.right_colum_content .help_search_block .content_search_block .keyword{
    width: 390px;
    height: 25px;
    float: left;
}
.right_colum_content .help_search_block .content_search_block .keyword input{
    border: 1px solid #5B8648;
    width: 245px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url("../PIE.htc"); 
}
.right_colum_content .help_search_block .content_search_block .select_menu{
    float: left;
}
.right_colum_content .help_search_block .content_search_block .select_menu select{
    border: 1px solid #5B8648;
    width: 150px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url("../PIE.htc"); 
}
.right_colum_content .help_search_block .content_search_block .button_search_help{
    background: url("../img/button_help_green.png") no-repeat scroll 0 0 transparent;
    cursor: pointer;
    width: 238px;
    margin-left: 20px;
    height: 24px;
    float: left;
}
.right_colum_content .help_search_block .content_search_block .bottom_text{
    float: left;
    padding-top: 10px;
    width: 800px;
    height: auto;
}
.right_colum_content .help_search_block .content_search_block .bottom_text .left_text{
    float: left;
    width: 400px;
    height: 60px;
}
.right_colum_content .help_search_block .content_search_block .bottom_text .right_text{
    float: right;
    text-align: right;
    width: 400px;
    height: 60px;
}
.right_colum_content .help_search_block .content_search_block .bottom_text .right_text input{
    color: #48AACC;
    cursor: pointer;
}


.right_colum_content .help_search_block .content_search_block .bottom_text .left_text .choice{
    float: left;
}
.right_colum_content .help_search_block .content_search_block .bottom_text .choice span{
    padding: 5px;
}
.right_colum_content .random_reguests{
    float: left;
    width: 822px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.right_colum_content .random_reguests .title{
    font-size: 17pt;
    color: #48AACC;
    padding-bottom: 10px;
}
.right_colum_content .random_reguests .text{
    color: #5B5A5A;
}
.right_colum_content .random_reguests .text span{
    font-weight: bold;
    font-size: 11pt;
}
.right_colum_content .generation_search{
    border: 1px solid #714486;
    width: 800px;
    height: auto;
    padding: 10px;
    float: left;
}
.right_colum_content .generation_search .top_menu{
    width: 800px;
    height: 50px;
    float: left;
}
.right_colum_content .generation_search .top_menu .sort{
    float: left;
    width: 385px;
}
.right_colum_content .generation_search .top_menu .pager{
    float: right;
    width: 415px;

}
.right_colum_content .generation_search .top_menu .pager a{
    text-decoration: none;
}
.right_colum_content .generation_search .top_menu .pager .prev{
    border: 1px solid #5B5A5A;
    float: left;
    font-size: 10pt;
    height: 20px;
    color: #5B5A5A;
    padding-right: 10px;
    text-align: right;
    width: 100px;
    cursor: pointer;
}

.right_colum_content .generation_search .top_menu .pager .page{
    float: left;
    width: 20px;
    height: 20px;
    border: 1px solid #5B5A5A;
    font-size: 10pt;
    margin-left: 5px;
    text-align: center;
    color: #48AACC;
    cursor: pointer;
}
.right_colum_content .generation_search .top_menu .pager ._page{
    float: left;
    width: 10px;
    height: 20px;
    font-size: 10pt;
    margin-left: 5px;
    text-align: center;
    color: #48AACC;
}
.right_colum_content .generation_search .top_menu .pager .next{
    float: left;
    width: 100px;
    height: 20px;
    border: 1px solid #5B5A5A;
    text-align: left;
    margin-left: 5px;
    font-size: 10pt;
    padding-left: 10px;
    color: #48AACC;
    cursor: pointer;
}
.right_colum_content .generation_search .top_menu .pager .current{
    background: #447b87;
    color: white;
}
.right_colum_content .generation_search .top_menu .sort select{
    border: 1px solid #5B8648;
    cursor: pointer;
    width: 150px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url("../PIE.htc"); 
}
.right_colum_content .generation_search .top_menu .sort span{
    color: #5B5A5A;
    font-size: 11pt;
}
.right_colum_content .generation_search .search_results{
    float: left;
    width: 800px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.right_colum_content .generation_search .search_results .title{
    font-size: 15pt;
    color: #213d43;
}
.right_colum_content .generation_search .search_results .date{
    font-size: 11pt;
    color: #5B5A5A;
    padding-top: 5px;
    padding-bottom: 5px;
}
.right_colum_content .generation_search .search_results .text{
    font-family: Arial;
    padding-bottom: 10px;
    font-size: 11pt;
    width: 800px;
    float: left;
}
.right_colum_content .generation_search .search_results .name span{
    color: #447B87;
    float: left;
    width: 70px;
}
.right_colum_content .generation_search .search_results .name{
    color: #447B87;
    float: left;
    width: 800px;
}
.right_colum_content .generation_search .search_results .name .star{
    background: url("../../img/small_star.png") no-repeat scroll 0 0 transparent;
    float: left;
    height: 12px;
    margin-top: 3px;
    padding: 1px;
    width: 12px;
}


.page .footer{
    background: url("../img/footer_back.png") repeat-x scroll 0 0 transparent;
    color: #F0F0F0;
    float: left;
    font-family: Arial;
    height: 80px;
    width: 1020px;
}
.page .footer_text{
    padding: 10px;
}
.contacts{
    float: right;
    font-size: 9pt;
    margin-right: 25px;
    margin-top: -10px;
    text-align: right;
}
.copyright{
    font-size: 9pt;
    margin-top: 30px;
    text-align: center;
}
 

.footer_text .menu {
    color: #F0F0F0;
    float: right;
    height: 105px;
    margin-top: -20px;
    width: 500px;
}
.text_menu a {
    color: #F0F0F0;
    cursor: pointer;
    float: left;
    font-size: 9pt;
    font-weight: bold;
    margin-left: 10px;
    margin-right: 10px;
    padding-top: 3px;
    text-decoration: none;
}
.text_menu span {
    color: #F0F0F0;
    float: left;
}

/*reklamka*/

.yashare-auto-init {
    float: right;
    margin-bottom: 5px;
     padding-right: 55px;
    width: 100%;
}
.b-share {
    float: right;
}
/*reklamka END*/

   /*</style>*/