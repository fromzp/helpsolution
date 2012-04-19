/*<style type="text/css">
    style_home.css*/

    html, body, div, span, h1, h2, h3, h4, h5, h6, p, a, em, font, img, strong, b, u, i, sup, sub, center, dl, dt, dd, ol, ul, li, form, label, table, tbody, tfoot, thead, tr, th, td {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        vertical-align: baseline;
        background: transparent;
    }

    html{
        height: auto;

    }

    body {
        height: auto;
        position: relative;
        width: 1020px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0px;
        background-color: white;
    }

    .header {
        height: 167px;
        width: 1020px;
    }
    .header .header_logo {
        /*background: url("../img/logo_header.png") no-repeat scroll 0 0 transparent;*/
        height: 151px;
        width: 545px;
        float: left;
    }

    .header .header_logo .logo_img{
        background: url(<?php echo _img('e_logo.png'); ?>) no-repeat scroll 0 0 transparent;
        float: left;
        height: 70px;
        margin-left: 25px;
        margin-top: 10%;
        outline: medium none;
        width: 260px;
    }
    .header .header_menu {
        height: 164px;
        width:475px;
        float: right;

    }
    .header .header_menu .panel{
        margin-top: 25px;
        width: 480px;
        height: 45px;

    }

    .header .header_menu .panel .select_ {
        float:left;
        margin-left: 10px;
        width: 115px;
    }

    .header .header_menu .panel .registration_button {
        background: url(<?php echo _img('user_panel_green_button.png'); ?>) no-repeat scroll 0 0 transparent;
        height: 23px;
        width: 91px;
        color: white;
        font-size: 10pt;
        font-family: Arial,Helvetica,sans-serif;
        border-style: none;
        margin-left: 3%;
        float: left;
        font-weight: bold;
        padding-bottom: 3px;
        border: 0;
    }

    .header .header_menu .panel .registration_button a {
        overflow:hidden;
        color:white;
        text-align:center;
        text-decoration: none;
        padding-left: 8px;
        padding-top:9px;
    }

    .header .header_menu .panel .login_button {
        background: url(<?php echo _img('user_panel_black_button.png'); ?>) no-repeat scroll 0 0 transparent;
        height: 23px;
        width: 91px;
        color: white;
        font-size: 10pt;
        font-family: Arial,Helvetica,sans-serif;
        border-style: none;
        float: right;
        font-weight: bold;
        margin-right: 35px;
        padding-bottom: 3px;
    }

    .header .header_menu .panel .login_button a {
        overflow:hidden;
        color:white;
        text-align:center;
        text-decoration: none;
        padding-left: 25px;
        padding-top:9px;
    }

    .header .header_menu .panel .flag{
        background: url(<?php echo _img('flag-lang.png'); ?>);
        width:32px;
        height: 32px;
        float: left;
        margin-left: 15%;
    }



    .header .header_line {
        height: 12px;
        width: 545px;
        background: black;
        float: left;

    }
    
   
    .header .header_menu .menus {
        width: 475px;
        height: 97px;

    }

    .header .header_menu .menus .li {
        margin-top: 45px;
        float: left;
        width: 184px;
        text-align: center;
        font-size: 9pt;

    }


    .header .header_menu .menus .small {
        width: 105px;
    }

    .header .header_menu .menus .small span {
        padding-right: 35px;


    }

    .header .header_menu .menus .black_line {
        background: black;
        width: auto;
        height: 12px;
        margin-top: 21px;

    }


    .header .header_menu .menus .li:hover .black_line {
        background: #88b7d2;
    }

    .header .header_menu .menus .li .activ {
        background: #88b7d2;
    }
    /*header end*/

    .content {

        float: left;
        height: auto;
        width: 1020px;

    }
    /*up text*/
    .content .main_content {
        width: 1020px;
        height: 490px;;
        float: left;
        margin-top: 0px;



    }

    /*sliders*/

    .content .main_content .slider {
        float: left;
        height: 490px;
        margin-left: 25px;
        width: 480px;
    }

    .content .main_content .slides {
        float: left;
        height: 100%;
        width: 100%;
    }


    .content .main_content .slider .slide_text {

        float: left;
        height: 150px;
        width: 100%;
        margin-left: 70px;

    }

    .content .main_content .slider .slides .slides_container {
        width: 100%;
        font-family: Verdana;
        font-size: 11pt;

    }

    .content .main_content .slider .slides .slides_container .title_text {
        float: left;
        height: 20px;
        width: 100%;
        margin-top: 15px;
        color: #88b7d2;
        text-align: center;
        font-family: arial;
        font-weight: bold;
        font-size: 12pt;
    }

    .content .main_content .slider .slides .slides_container .maint_text {
        margin-top: 5px;
        width: 100%;
        height: 170px;
        float: left;

    }

    .content .main_content .slider .slides .slides_container .main_text_long {
        margin-top: 25px;
        width: 100%;
        height: 170px;
        float: left;

    }

    .content .main_content .slider .navigator {
        width: 100%;
        height: 30px;
        float: left;
        margin-left: 70px;
        margin-top: 10px;
    }

    .content .main_content .slider .navigator .points {
        float: left;
        width: 160px;
        height: 17px;
        margin-left: 35%;
        margin-top: 5px;
    }
    .content .main_content .slider .navigator .points div {
        float: left;
        height: 17px;
        width: 17px;
        background: url(<?php echo _img('point.png'); ?>);
        margin-left: 20px;
    }

    .slides_container {
        height: 423px;;
        margin-top: 5%;
        width: 520px
    }
    .slides_container div {
        width:480px;
        height:430px;
        display:block;

    }

    .pagination {

        width:200px;
        margin-top: 10px;
        margin-right: auto;
        margin-bottom: 0px;
        margin-left: 170px;


    }

    .pagination li {
        float:left;
        margin:0 1px;
        list-style:none;

    }

    .pagination li a {
        display:block;
        width:17px;
        height:0;
        padding-top:18px;
        background:url(<?php echo _img('point.png'); ?>) no-repeat ;
        background-position:0 0;
        float:left;
        overflow:hidden;
    }

    .pagination li.current a {
        background:url(<?php echo _img('activ_point.png'); ?>) no-repeat ;
    }
    /*END sliders*/

    /*right part view login pass view*/

    .content .main_content .cabinet {
        float: left;
        height: 472px;
        padding: 5px 10px 18px 50px;
        width: 445px;

        width: 453px;
    }

    .cabinet form {

        height: 275px;
        width: 100%;
    }

    .content .main_content .cabinet .title_text {
        color: #88B7D2;
        float: left;
        font-family: arial;
        font-size: 12pt;
        font-weight: bold;
        height: 20px;
        margin-top: 15px;
        width: 100%;

    }
    .content .main_content .cabinet .gorizont_line {
        margin-top: 5px;
        background: #eeeeee;
        height: 2px;
        width: 100%;
        float: left;
    }

    .content .main_content .cabinet .login_panel {
        margin-top: 15px;
        float: left;
        width: 100%;
        height: 180px;
        font-family: Verdana;
        font-size: 11pt;
    }
    .content .main_content .cabinet .login_panel .login {
        margin-top: 10px;  
    }

    .content .main_content .cabinet .login_panel .password {
        margin-top: 20px;  
    }
    .content .main_content .cabinet .login_panel .check {
        margin-top: 20px;  
    }
    .content .main_content .cabinet .login_panel div {
        margin-top: 20px;  
    }


    .content .main_content .cabinet .login_panel a {
        margin-left: 10px;
        color: black;
        font-size: 11pt;
        font-family: Arial,Helvetica,sans-serif;
        font-style: normal;
        text-decoration: none;
    }


    .content .main_content .cabinet .login_panel .style_checkbox{
        width: 232px;
    }


    .content .main_content .cabinet .login_button {
        float: left;
        background: url(<?php echo _img('login_green_button.png'); ?>) no-repeat;
        height: 35px;
        width: 235px;
        color: white;
        font-family: Verdana,Arial,Helvetica,sans-serif;
        text-align: center;
        font-size: 14pt;
        border-style: none;
        font-weight: bold;
    }
    /*right part view join view*/
    .content .main_content .cabinet .join_us {
        font-family: arial;
        font-size: 11pt;
        float: left;
        height: 170px;
        width: 100%;
        padding-top: 9px;


    }

    .content .main_content .cabinet .join_us .join_us_title_text {
        color: #88B7D2;
        float: left;
        font-size: 12pt;
        font-weight: bold;
        height: 20px;
        margin-top: 15px;
        width: 100%;
    }

    .content .main_content .cabinet .join_us .gorizont_line {
        margin-top: 5px;
        background: #eeeeee;
        height: 2px;
        width: 100%;
        float: left;
    }
    .content .main_content .cabinet .join_us .who_join input {
        margin-top: 15px;
    }

    .content .main_content .cabinet .join_us .who_join .proceed{
        margin-top: 21px;
        float: left;
        background: url(<?php echo _img('login_green_button.png'); ?>) no-repeat;
        height:35px;
        width: 235px;
        color: white;
        font-family: Verdana,Arial,Helvetica,sans-serif;
        text-align: center;
        font-size: 14pt;
        border-style: none;
        font-weight: bold;
    }

    /*SEARCH*/
    .content .search {
        float: left;
        height: 100px;
        width: 100%;

    }

    .content .search .gorizont_line {

        background: #eeeeee;
        height: 2px;
        width: 100%;
        float: left;
    }

    .content .search .search_content {
        width: 100%;
        height: 96px;
        border-bottom: 2px solid #eeeeee;
        border-top: 2px solid #eeeeee;
    }

    .content .search .search_content .search_select {
        padding-left: 100px;
        padding-top: 27px;
    }

    .content .search .search_content .search_select select {
        color: black;
        font-family: Arial,Helvetica,sans-serif;
        font-size: 10pt;
        font-style: inherit;
        font-variant: small-caps;
        font-weight: inherit;
        height: 35px;
        padding-top: 6px;
        text-align: center;
        height: 42px;
        width: 226px;

    }

    .content .search .search_content .search_noselect .input_search {
        border: 1px solid black;
        border-radius: 5px 5px 5px 5px;
        height: 35px;
        margin-left: 3%;
        width: 408px;
        margin-top: 3px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -khtml-border-radius: 5px;
    }


    .content .search .search_content .search_noselect .search_button  {

        float:right;
        width: 172px;
        height: 35px;
        margin-right: 70px;
        margin-top: -1px;
        font-family: Verdana,Arial,Helvetica,sans-serif;
        font-size: 14pt;
        font-weight: bold;


    }
    .content .search .search_content .search_noselect .search_button input {
        width: 100%;
        height: 100%;
        background: url(<?php echo _img('blue_button.png'); ?>);
        font-family: Verdana,Arial,Helvetica,sans-serif;
        font-size: 16pt;
        color: white;
        border-style: none;
        font-weight: bold;
    }

    /*search select view*/
    .redSelect .cusel,
    .redSelect .cuselFrameRight,
    .redSelect .jScrollPaneDrag,
    .redSelect .jScrollArrowUp,
    .redSelect .jScrollArrowDown {
        background-image: url(<?php echo _img('select.png'); ?>) !important;
    }

    .redSelect .cuselScrollArrows
    {
        width: 226px;
        height: 46px;
        float: left;
        text-align: center;
    }


    .redSelect .cuselScrollArrows .cuselText {
        color: black;
        font-family: Arial,Helvetica,sans-serif;
        font-size: 10pt;
        font-style: inherit;
        font-variant: small-caps;
        height: 34px;
        padding-top: 12px;
        text-align: center;
        width: 200px;

    }
    .redSelect .cuselFrameRight { 
        position: absolute;
        z-index: 2;
        top: 0;
        right: 0;
        height: 100%;
        width: 25px;
        background-position: right top;
    }


    /* search select view END*/

    /*SEARCH END*/



    /*CENTER*/




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
    .content .center{
        float: left;
        height: 550px;
        width: 100%;
        margin-left: 34px;
        margin-top: 15px;
    }


    .content .form_center {
        float: left;
        font-family: arial;
        height: 650px;
        width: 320px;
    }
    .content .form_center .content_form{
        ;
        margin-left: 10px;
    }


    .form_center .content_form .text {
        font-size: 11pt;
        height: 320px;
        text-indent: 20pt;
        font-family: Arial;
        font-style: normal;
        font-weight: lighter;
        font-variant: normal;
        text-align: left;
    }
    .form_center .content_form .text p{
        padding-top: 10px;
    }
    .form_center .content_form .button {

        background: url(<?php echo _img('content_help_button.png'); ?>) no-repeat scroll 0 0 transparent;
        cursor: pointer;
        height: 45px;
        margin-left: 60px;
        width: 140px;
        text-align: center;
        margin-top: 10%;
    }

    .form_center .content_form .button a {
        color: white;
        font-size: 12px;
        text-decoration: none;
    }



    .form_center .content_form .text a{
        color: #88b7d2;
    }

    /*colons*/
    .form_center .content_form .name_form_left{
        background: #ffb91a;
        font-size: 12pt;
        height: 45px;
        width: 300px;
        padding-top: 18px;
        text-align: center;

    }

    .form_center .content_form .image{
        background: url(<?php echo _img('content_foto_left.png'); ?>) no-repeat scroll 0 0 transparent;
        height: 110px;
        margin-top: 10px;
        width: 300px;
    }




    .center .center_colum .image{
        background: url(<?php echo _img('content_foto_medium.png'); ?>) no-repeat scroll 0 0 transparent;
        width: 300px;
        height: 110px;
    }

    .form_center .content_form .name_form_center {
        background: #96c933;
        font-size: 12pt;
        height: 45px;
        width: 300px;
        padding-top: 18px;
        text-align: center;

    }

    .center .center_colum .button {
        text-align: center;
        padding-top: 10px;
    }


    .form_center .content_form .name_form_right{
        background: #60d0a5;
        font-size: 12pt;
        height: 45px;
        width: 300px;
        padding-top: 18px;
        text-align: center;
    }

    .form_center .content_form .button_right_colum a {
        color: white;
        font-size: 13px;
        text-decoration: none; 

    }

    .form_center .content_form .button_right_colum {
        background: url(<?php echo _img('content_help_button.png'); ?>) no-repeat scroll 0 0 transparent;
        cursor: pointer;
        height: 34px;
        margin-left: 60px;
        width: 140px;
        text-align: center;
        margin-top: 10%;
        padding-top: 10px;
    }



    .center .right_colum .image{
        background: url(<?php echo _img('content_foto_right.png'); ?>) repeat scroll 0 0 transparent;

    }

    /*center END*/
   
.footer{
    background: url(<?php echo _img('footer_back.png'); ?>) repeat-x scroll 0 0 transparent;
    color: #F0F0F0;
    float: left;
    font-family: Arial;
    height: 80px;
    width: 1020px;
}
.footer_text{
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
.line_footer{
    /*background: url("../img/header_line.png") repeat scroll 0 0 transparent;*/
    height: 2px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5px;
    width: 850px;  
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
        margin-top: 50px;
        padding-right: 55px;
        width: 100%;
    }
    .b-share {
        float: right;
    }
    /*reklamka END*/

    /*ERRORS*/
    em.error {
        padding-left: 16px;
    }

    em.error { color: red;
    possition: absolute;
    }
    
    div .error {
        color: red;
    }

    .msg_errors {
        float:left;
        width: 100%;
        height: 15px;
        font-size: 14px;  
    }
    
    #registrationForm .inputs_errors {
    float: right;  
    width: 490px;
    }
    /*ERRORS END*/

    /*registration page content*/
    .title_registration {
        float: left;
        width: 100%;
        height : 50px;
        background: #78adcc;
        font-size: 12px;     
    }

    .title_registration h3 {
        color: white;
        padding-top: 15px;
    }

    #registrationForm {
        float:left;
        height: auto;
        width: 940px;
        borde: 1px solid red;
        margin: 25px 40px 5px 40px; 
    }

#rgistration_border {
    border: 2px solid #ADADAD;
    float: left;
    font-size: 14px;
    height: 420px;
    padding: 25px 0;
    width: 935px;
}


    .user_photo {
        float: left;
        height: 335px;
        width: 340px;
    }

    .user_photo .line {

        float:right;
        height:100%;
        width:2px;
        background:grey;
    }

    .user_photo .photo {
        float: left;
        height: 350px;
        margin-left: 45px;
        width: 206px;
    }

    .user_photo .photo .upload_photo {
         /*background: url(<?php echo _img('photo_load.png'); ?>) no-repeat scroll 0 0 transparent; */
        width: 207px;
        height:275px;
        float:left;

    }

    .user_photo .photo .choose {
        margin-top: 10px;
        float:left;
        height: 60px;
        width: 207px;
        font-size: 14px;
        font-famaly: Arial;
    }

    .kolonki {
        float: right;
        height: 100%;
        width: 490px;
    }
    .kolonki .inputs {
        float: left;
        height: 29px;
    }

 .kolonki .inputs_radio {
    float: left;
    height: 25px;
    width: 231px;
} 


    .kolonki .captcha {
        float: left;
        height: auto;
        width: 225px;   
    }
    .kolonki .captcha .image {
        background: url(<?php echo _img('captcha_img.png'); ?>) no-repeat scroll 0 0 transparent;
        cursor: pointer;
        float: left;
        height: 69px;
        width: 196px;
    }

    .kolonki .inputs input {
        margin-bottom: 10px;
        width: 225px;
    } 
    .kolonki .inputs .necessarily{
        padding-top: 15px;
        float: left;
    }



    .kolonki .msg {
        float: left;
        padding-left: 6px;
        }

    .rubber {
        clear:both;
        height:1px;
        width:99%;
    }

    .accept {
        float: right;
        height: 24px;        
        width: 580px;
        font-size: 14px;
        font-famaly: Arial;
    }

    .accept a {
        color: black;
    }


    #doRegistrationButton {
        background: url(<?php echo _img('login_green_button.png'); ?>) no-repeat scroll 0 0 transparent;
        border-style: none;
        color: white;
        float: right;
        font-family: Verdana,Arial,Helvetica,sans-serif;
        font-size: 14pt;
        font-weight: bold;
        height: 35px;
        text-align: center;
        width: 235px;
        margin-top: 10px;
        padding-top: 5px;
        cursor: default;
    }
    
 
    .back_button {
        background: url(<?php echo _img('login_green_button.png'); ?>) no-repeat scroll 0 0 transparent;
        border-style: none;
        color: white;
        float: right;
        font-family: Verdana,Arial,Helvetica,sans-serif;
        font-size: 14pt;
        font-weight: bold;
        height: 35px;
        text-align: center;
        width: 235px;
        margin-top: 10px;
        margin-right: 40px;
    }
    
    

        /*registration validate*/

    label {
        width: 10em;
        float: left; 
    }
    label.error { 
        float: none;
        color: red;
        vertical-align: top;
    }
    
    p {
        clear: both; 
    }
 
    em { 
        font-weight: bold; padding-right: 1em; vertical-align: top;
    }

    /*End registration validate*/
    
    /*registration_page*/

    /*second page*/


.content .title_text {
    color: #88B7D2;
    float: left;
    font-family: Arial;
    font-size: 16pt;
    font-weight: bold;
    height: auto;
    letter-spacing: 2pt;
    margin-left: 3%;
    margin-top: 30px;
    width: 68%;
}

.content .first_line {
    float: left;
    font-variant: inherit;
    height: 115px;
    margin-left: 3%;
    margin-top: 30px;
    width: 100%;
}

.content .first_line .article {
    color: black;
    font-family: Arial;
    font-size: 12pt;
    height: 100%;
    width: 50%;
    float: left;
}
.content .first_line .image {
    background: url(<?php echo _img('can_help.png'); ?>) repeat scroll 0 0 transparent;
    float: left;
    height: 45px;
    margin-left: 165px;
    margin-top: 35px;
    width: 175px;
}

.content .first_line .image .buttom {
    background: url(<?php echo _img('can_help.png'); ?>);
    height: 45px;
    width: 175px;
    border-style: none;
    color: white;

}

.content .second_line {
    float: left;
    font-variant: inherit;
    height: auto;
    margin-left: 3%;
    width: 100%;
}
.content .second_line .image {
    background: url(<?php echo _img('team.png'); ?>) repeat scroll 0 0 transparent;
    float: left;
    height: 200px;
    margin-left: 40px;
    width: 397px;
}

.content .second_line .image .team_info {
    background: none repeat scroll 0 0 #EAF5E5;
    height: 90px;
    margin: 13% 0 0 8%;
    position: absolute;
    width: 210px;
}

.content .second_line .image .team_info .info{
    height: 100%;
    width: 100%;
    float: left;
    padding-top: 5px;
}

.content .second_line .image .team_info .prapor {
    background: url(<?php echo _img('prapor.png'); ?>) no-repeat scroll 0 0 transparent;
    width: 35px;
    height: 100%;
    margin: 0 0 0 5px;
    float: left;
}
.content .second_line .image .team_info .info .title {
    float: left;
    width: 160px;
    height: auto;
    color: black;
    font-size: 9pt;
    font-weight: bolder;
    font-family: arial;

}
.content .second_line .image .team_info .info .ocinka{
    float: left;
    width: 125px;
    height: 20px;
    padding: 2px;
    text-align: right;
    font-weight: bolder;
}

.content .second_line .image .team_info .info .ocinka .star{
    background: url(<?php echo _img('star.png'); ?>) no-repeat scroll 0 0 transparent;
    float: left;
    height: 15px;
    width: 15px;
    padding: 2px;
}

.content .second_line .image .team_info .info .text { 
    color: #2F79CC;
    float: left;
    font-family: arial;
    font-size: 9pt;
    height: auto;
    letter-spacing: 0;
    width: 125px;
}

.content .second_line .image .title_text {
    color: black;
    width: 100
}
.content .second_line .article {
    color: black;
    float: left;
    font-family: Arial;
    font-size: 12pt;
    height: 100%;
    width: 50%;
    margin-top: 35px;
}   

.article_title {
    color: #65881f;
    padding-bottom: 20px;
}

.content .third_line {
    float: left;
    font-variant: inherit;
    height: 235px;
    margin-left: 3%;
    margin-top: 30px;
    width: 100%;
}

.content .third_line .article {
    color: black;
    font-family: Arial;
    font-size: 12pt;
    height: 100%;
    width: 50%;
    float: left;
    margin-top: 30px;
}

.content .third_line .image {
    background: url(<?php echo _img('think.png'); ?>) repeat scroll 0 0 transparent;
    float: left;
    height: 242px;
    margin: -60px 1px 1px 88px;
    width: 219px;
}

.content .fourth_line {
    float: left;
    font-variant: inherit;
    height: auto;
    margin-left: 3%;
    width: 100%;
}

.content .fourth_line .article {
    color: black;
    float: left;
    font-family: Arial;
    font-size: 12pt;
    height: 100%;
    margin-left: 110px;
    width: 50%;
}

.content .fourth_line .image {
    background:  url(<?php echo _img('krug.png'); ?>) repeat scroll 0 0 transparent;
    float: left;
    height: 170px;
    margin: 0 0 0 145px;
    width: 188px;
}


.content .fifth_line {
    float: left;
    font-variant: inherit;
    height: auto;
    margin-left: 3%;
    margin-top: 30px;
    width: 100%;
}

.content .fifth_line .image {
    background: url(<?php echo _img('hands.png'); ?>) repeat scroll 0 0 transparent;
    float: left;
    height: 199px;
    margin-left:81px;
    width: 350px;
}
.content .fifth_line .article {
    color: black;
    float: left;
    font-family: Arial;
    font-size: 12pt;
    height: 100%;
    width: 50%;
}
.content .thists {
    height: auto;
    width: 100%;
    float: left;
    margin-top: 30px;
}

.content .thists .button {
    background: url(<?php echo _img('can_help.png'); ?>) repeat scroll 0 0 transparent;
    border-style: none;
    color: white;
    height: 45px;
    margin-left: 45%;
    width: 175px;
}

/*need_help*/
.content .first_line {
    height: auto;
}
.content .image_button {
    float: left;
    width: 175px;
    height: auto;
    margin-top: 30px;
}


.content .image_button .button {
    background: url(<?php echo _img('can_help.png'); ?>) no-repeat scroll 0 0 transparent;
    height: 45px;
    width: 175px;
    border-style: none;
    color: white;
    text-align: center;
    padding-top: 5px;

}



.content .image_button .button a {
    color: white;
    font-size: 14px;
    text-align: center;
    text-decoration: none;
}

.content .with_hand {
    float: left;
    height: 540px;
    width: 100%;
    padding-top: 20px;
}
.content .with_hand .pluses {
    float: left;
    height: 100%;
    padding-top: 10px;
    width: 60%;
}


.content .with_hand .pluses .article {
    width: 100%;
    height: auto;
    font-family: Arial;
    font-size: 11pt;
    color: black;
}
.content .with_hand .pluses .article  .numbers {
    width: 60px;
    height: auto;
    float: left;
    color: white;
    font-size: 36pt;
    text-align: center;
    font-family: Arial;
}
.content .with_hand .pluses .article  .numbers .image_numbers {
    background: url(<?php echo _img('green_circle.png'); ?>) no-repeat scroll 0 0 transparent;
    float: left;
    height: 60px;
    width: 60px;

}

.content .with_hand .pluses .article .text {
    float: left;
    width: 537px;
    height: auto;
    padding-left: 15px;

}

.content .with_hand .pluses .article .title_text {
    float: left;
    width: 100%;
    height: auto;
    font-family: Arial;
    font-size: 11pt;
    color: #9cce37;
    margin-top: 0px;
    margin: 0px;
    font-weight: bold;
}

.content .with_hand .pluses .article .main_text {
    float: left;
    height: auto;
    margin-top: 15px;
    width: 100%;
}

.content .with_hand .hand {
    float: right;
    width: 40%;
    height: 100%;
}

.content .with_hand .hand .green_line {
    background: #9cce37;
    float: left;
    height: 100%;
    width: 10px;
}

.content .with_hand .hand .big_hand {
    background: url(<?php echo _img('big_hand.png'); ?>) no-repeat scroll 0 0 transparent;
    float: left;
    height: 293px;
    width: 330px;
    margin-top: 40%;
}

.content .bottom_button {
    float: left;
    height: auto;
    margin-left: 36%;
    margin-top: 10px;
    width: auto;
}


.content .bottom_button .button {
    background: url(<?php echo _img('can_help.png'); ?>);
    height: 45px;
    width: 175px;
    border-style: none;
    color: white;
    text-align: center;

}

.content .bottom_button .button a {
    color: white;
    font-size: 14px;
    text-align: center;
    text-decoration: none;
}

    
/*about_us*/
.content .first_line .about_article {
    width: 700px;
}

.content .first_line .about_article .title_text {
    width: auto;
    float: none;
    margin-top: 0px;
    padding-bottom: 40px;
}
.content .first_line  .about_image {
    margin-left: 65px;
    margin-top: 120px;

}

.content .first_line  .about_image_button {
    margin-left: 65px;
    margin-top: 60px;

}

.content .the_line {
    width: 100%;
    height: auto;
    float: left;
    margin-top: 30px;
}

.content .the_line .for_image {
    float: left;
    height: 205px;
    width: 335px;
}

.content .the_line .for_image .image {
    background: url(<?php echo _img('para.png'); ?>) repeat scroll 0 0 transparent;
    float: left;
    height: 202px;
    width: 223px;
    margin-left: 20%;
}

.content .the_line .for_text {
    color: black;
    float: right;
    font-family: Arial;
    font-size: 12pt;
    height: 100%;
    margin-right: 30px;
    width: 622px;
}

.content .the_line .for_text .title_text {
    font-family: Arial;
    font-size: 12pt;
    color: #65881F;
    padding-bottom: 20px;
    font-variant: inherit;
    float: left;
    width: 100%;
    margin-top: 0;
}

.content .the_line_right .for_image {
    float: right;
    height: 253px

}

.content .the_line_right .for_image .image {
    background: url(<?php echo _img('wight.png'); ?>) no-repeat scroll 0 0 transparent;
    height: 253px;
    width: 211px;
}
.content .the_line_right .for_image_left {
    float: left;
}

.content .the_line_right .for_image_left .image {
    background: url(<?php echo _img('two_hands.png'); ?>) no-repeat scroll 0 0 transparent;
    width: 299px;
    height: 196px;
    margin-left: 0px;
    margin-top: 60px;
    margin-left: 30px;

}
.content .two_botton {
    float: left;
    width: 100%;
    height: 45px;
    margin-top: 10px;
    padding-left: 22%;
}

.content .two_botton .button_want {
    background: url(<?php echo _img('can_help.png'); ?>) no-repeat scroll 0 0 transparent;
    border-style: none;
    color: white;
    height: 45px;
    width: 175px;
    float: left;
    
}

.content .two_botton .button_need {
    background: url(<?php echo _img('can_help.png'); ?>) no-repeat scroll 0 0 transparent;
    border-style: none;
    color: white;
    height: 45px;
    text-align: center;
    width: 175px;
    float: left;
    margin-left: 175px;
    padding-top: 5px;
}

.content .two_botton .button_need a {
    color: white;
    font-size: 14px;
    text-align: center;
    text-decoration: none;
}

.clear_link {
    text-decoration: none;
    color: black;
}

/*END about_as*/



    /*</style>*/