/*<style type="text/css">
    style.css*/
    
.body {
    width: 1020px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 0px;
    font-family: Arial;
}

.header .header_logo {
    background: url(<?php echo _img('logo_header.png'); ?>) no-repeat scroll 0 0 transparent;
    height: 90px;
    width: 1020px;

}
.header .header_menu {
    height: 108px;
    width: 1020px;
}

.header .header_menu .main_menu {
    float: left;
    height: 38px;
    width: 63%;
}


.header .header_menu .main_menu ul {
    margin-top: 0;
    margin-left: -5px;
    padding: 0;
    list-style-type: none;
}

.header .header_menu .main_menu li a {
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
    behavior: url(<?php echo base_url(); ?>css/PIE.htc);

    border: 1px outset #BEBEBE;

}
.header .header_menu .main_menu li .style_menu{
    padding-top: 12px;    
}
.header .header_menu .main_menu li .active{
    background-color: #78adcc;
}

.header .header_menu .main_menu li .active_page {
    background-color: #78adcc;
}

.header .header_menu .main_menu li a:hover {
    background-color: #78adcc;
}
.header .header_menu .user_panel {
    float: right;
    height: 25px;
    padding: 3px 0px 10px;
    width: 32%;
}

/*menu make*/
.active_menu {
    display:inline;
}

/*menu_make_end*/


.header .header_menu .user_panel .login .user_logo {
    background: url(<?php echo _img('icon_people.png'); ?>) no-repeat scroll 0 0 transparent;
    width: 30px;
    height: 30px;
    background-color: white;
    float: left;
}

.header .header_menu .user_panel .login .user_name ul li {
    list-style-type: none;
    background-color: blue;
    cursor: pointer;

}
.header .header_menu .user_panel .login .user_name {
    float: left;
    width: 160px;
    font-size: 9pt;
    margin-top: 5px;

}
.header .header_menu .user_panel .login .info_row {
    background: url(<?php echo _img('icon_row.png'); ?>) no-repeat scroll 0 0 transparent; 
    width: 4px;
    height: 8px;
    float: left;
    padding: 5px;
    margin-top: 10px;
    cursor: pointer;

}
.header .header_menu .user_panel .message {
    background: url(<?php echo _img('user_mail.png'); ?>) no-repeat scroll 0 0 transparent; 
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
.header .header_menu .user_panel .messag{
    background: url(<?php echo _img('icon_info_massage.png'); ?>) no-repeat scroll 0 0 transparent;
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
.header .header_menu .user_panel .settings{
    background: url(<?php echo _img('user_gear.png'); ?>) no-repeat scroll 0 0 transparent; 
    width: 15px;
    height: 14px;
    float: left;
    margin-top: 7px;
    padding: 5px;
    cursor: pointer;
    margin-left: 10px;
}
.header .header_menu .user_panel .help{
    background: url(<?php echo _img('user_none.png'); ?>) no-repeat scroll 0 0 transparent; 
    width: 12px;
    height: 14px;
    float: left;
    padding: 5px;
    margin-top: 10px;
    cursor: pointer;
    margin-left: 10px;
}
.header .menu{
    width: 100%;
    margin-top: 0;
    height: 45px;
    background-color: #78adcc;
    float: left;
    -webkit-box-shadow: 0 0 2px 1px white;
    -moz-box-shadow: 0 0 2px 1px white;
    box-shadow: 0 0 2px 1px white;
}
.header .menu .menu_listing{
    float: left;
    width: 61%;
}
.header .menu .menu_listing ul{
    float: left;
    margin-top: 0;
    width: 100%;
    padding-top: 15px;
    color: white;
    font-size: 10pt;
    padding-left: 0;
    list-style-type: none;
}

.header .menu .menu_listing ul li{
    float: left;
    width: 170px;
}

.header .menu .menu_listing ul li a{
    text-align: center;
    width: 182px;
}

.header .menu .menu_listing ul li:hover div{
    background:  url(<?php echo _img('menu_triangle.png'); ?>) no-repeat scroll 0 0 transparent; 
    width: 26px;
    height: 23px;
    margin-top: 29px;
    margin-left: 78px;
    position: absolute;
}

.header .menu .menu_listing ul li div:hover {}

.header .menu .menu_listing .current {
    background:  url(<?php echo _img('menu_triangle.png'); ?>) no-repeat scroll 0 0 transparent; 
    width: 26px;
    height: 23px;
    margin-top: 29px;
    margin-left: 78px;
    position: absolute;
}

.header .menu .menu_listing .current_page {
    background:  url(<?php echo _img('menu_triangle.png'); ?>) no-repeat scroll 0 0 transparent; 
    width: 26px;
    height: 23px;
    margin-top: 29px;
    margin-left: 78px;
    position: absolute;
}

.header .menu .menu_listing a{
    float: left;
    color: white;
    text-decoration: none;
    outline: none;
    cursor: pointer;
}



.header .search{
    float: right;
    width: 39%;
    padding-top: 11px;
}
.header .search select{
    background: url(<?php echo _img('search_select.png'); ?>) no-repeat scroll 0 0 transparent;
    border: medium none;
    float: left;
    font-size: 7pt;
    height: 24px;
    letter-spacing: -1px;
    outline: medium none;
    padding: 5px 0;
    width: 96px;
}
.header .search .search_field input{
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
.header .search .button_search input{
    background: url(<?php echo _img('search_button.png'); ?>) no-repeat scroll 0 0 transparent;
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
    background: url(<?php echo _img('header_line.png'); ?>) repeat scroll 0 0 transparent;
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
/* content */
.content{
    padding: 0px 0px 0px;
    width: 1020px;
    font-family: Arial;
    min-height: 800px;

}
.clear_content .title{
    color: #598644;
    padding-bottom: 10px;
    font-family: Arial;
}
.clear_content .content_text{
    padding-bottom: 20px;
    font-family: Arial;
    font-size: 11pt;
}

/*menu left*/

.content_menu_left{
    float: left;
    width: 210px;
}
.content .line_vertical{
    background: #78ADCC;
    float: left;
    width: 2px;
    min-height: 800px;
    max-height: 5000px;
}
.content_menu_left .menu_listing{
    width: 100%;
}
.menu_listing .menu {
    background: none repeat scroll 0 0 black;
    color: white;
    float: left;
    margin-bottom: 3px;
    padding: 15px 17px;
    text-align: left;
    width: 84%;

    text-decoration: none;
    font-family: Arial;
    font-size: 8pt;
}
.menu_listing .menu:hover {
    background: #78ADCC; 
}
.menu_listing .active{
    background: #78ADCC;  
}
.menu_listing .row_active{
    background: url(<?php echo _img('content_menu_triagle.png'); ?>) no-repeat scroll 0 0 transparent;
    float: left;
    height: 36px;
    margin-left: 211px;
    margin-top: -41px;
    width: 27px;
}
.menu_listing .hidden{
    display: none;
}

.menu_listing .menu a{
    color: white;
    text-decoration: none;
    font-family: Arial;
    font-size: 10pt;
}

/*menu left END*/

.content_menu_left .menu_info{
    width: 100%;
    margin-top: 40px;
}
.menu_info .search_menu{
    background: none repeat scroll 0 0 #FAF9F4;
    border: 1px solid black;
    float: left;
    margin-bottom: 35px;
    margin-top: 35px;
    padding: 5px;
    width: 195px;
}
.search_menu .title{
    font-size: 10pt;
    color: gray;
}
.search_menu .content_menu{
    margin-top: 4px;
    font-size: 8pt;
}
.search_menu .content_menu .ul{
    color: #48AACC;;  
    width: 100%;
    cursor: pointer;
}
.search_menu .content_menu .ul span{
    float: right;
    display: none;
    position: absolute;
}
.search_menu .content_menu .ul span input{
    background: none repeat scroll 0 0 #D8D6D6;
    border: medium none;
    font-size: 6pt;
    margin-top: 6px;
    width: 47px;

}
.search_menu .content_menu .ul span:hover{
    display: block;    
}

.search_menu .content_menu .ul:hover{
    background: #D8D6D6;
}
.content_menu_left .info{
    float: left;
    width: 100%;
}
.info .title{
    font-weight: bold;
    font-size: 10pt;
}
.info .content_info{
    font-size: 10pt;
    margin-top: 20px;
    margin-bottom: 15px;
}

.info .block_search {
    padding: 5px;
}
.info .block_help{
    padding: 5px;
    margin-top: 40px;
}
.info .button {
    background: none repeat scroll 0 0 #598644;
    border: 2px solid grey;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    color: white;
    font-size: 10pt;
    margin-left: 12px;
    padding: 2px;
    text-align: center;
    width: 160px;
}
.info .button a{
    color: white;
    text-decoration: none;
    list-style-type: none;
    width: 160px;
}



.content .content_tabs{
    float: left;
    padding: 20px 0 5px 25px;
    width: 782px;
}


.content_tabs .help_search_block{
    float: left;
    width: 820px;
    height: auto;
}

.content_tabs .help_search_block .title_search_block{
    width: 300px;
    font-size: 11pt;
}

.content_tabs .help_search_block .content_search_block{
    background: none repeat scroll 0 0 #F0F0F0;
    float: left;
    font-family: arial;
    height: auto;
    padding: 10px 0 0 30px;
    width: 752px;

}
.content_tabs .help_search_block .content_search_block .search_help{
    float: left;
    width: 740px;
}
.content_tabs .help_search_block .content_search_block .search_help a{
    color: #5B5A5A;
    float: right;
    font-size: 10pt;
}
.content_tabs .help_search_block .content_search_block .title_search{
    margin-bottom: 5px;
    font-size: 10pt;
}
.content_tabs .help_search_block .content_search_block .title_search a{
    font-weight: normal;
    text-decoration: none;
}
.content_tabs .help_search_block .content_search_block .keyword{
    width: 345px;
    height: 25px;
    float: left;
}
.content_tabs .help_search_block .content_search_block .keyword input{
    border: 1px solid #5B8648;
    width: 226px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
.content_tabs .help_search_block .content_search_block .select_menu{
    float: left;
}
.content_tabs .help_search_block .content_search_block .select_menu select{
    background: none repeat scroll 0 0 white;
    border: 1px solid #5B8648;
    width: 150px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
.content_tabs .help_search_block .content_search_block .button_search_help{
    background: none repeat scroll 0 0 #598644;
    border: 2px solid grey;
    color: white;
    float: left;
    font-size: 8pt;
    height: 13px;
    list-style-type: none;
    margin-left: 20px;
    padding: 3px;
    text-align: center;
    text-decoration: none;
    width: 220px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
.content_tabs .help_search_block .content_search_block .bottom_text{
    float: left;
    width: 752px;
    height: auto;
}
.content_tabs .help_search_block .content_search_block .bottom_text .left_text{
    float: left;
    width: 350px;
    height: 50px;
}
.content_tabs .help_search_block .content_search_block .bottom_text .right_text{
    float: right;
    text-align: right;
    width: 400px;
    height: 50px;
}
.content_tabs .help_search_block .content_search_block .bottom_text .right_text input{
    background: none repeat scroll 0 0 #F0F0F0;
    border: medium none;
    color: #48AACC;
    cursor: pointer;
    font-size: 9pt;
}

.content_tabs .help_search_block .content_search_block .bottom_text .left_text .choice{
    float: left;
}
.content_tabs .help_search_block .content_search_block .bottom_text .choice span{
    padding: 5px;
}

.content_tabs .block_choice_content{
    float: left;
    width: 100%;
    margin-top: 20px;
}
.content_tabs .block_choice_content .left_column{
    width: 28%;
    float: left;
    margin-left: 33px;
}
.content_tabs .block_choice_content .center_column{
    width: 28%;
    float: left;
    margin-left: 40px;
}
.content_tabs .block_choice_content .right_column{
    width: 28%;
    float: left;
    margin-left: 40px;
}

.content_tabs .block_choice_content .title_choice{
    width: 100%;
    font-size: 11pt;
    color: #48AACC;

}
.content_tabs .block_choice_content  .title{
    color: #447B87;
    font-size: 10pt;
    font-weight: bold;
    margin-top: 20px;
}
.content_tabs .block_choice_content .content_list{
    padding-left: 20px;
    margin-top: 5px;
}
.content_tabs .block_choice_content .content_list .list{
    font-size: 10pt;
    color: #447B87;
    text-decoration: none;
}



.social{
    float: right;
    height: 25px;
    padding: 20px 55px 5px;
    width: 1010px;
}
.social .social_button{
    float: right;
    height: 14px;
    padding: 5px 0 4px 10px;
    width: 17px;
}
.social .face_book{
    background: url(<?php echo _img('fb_button.png'); ?>) no-repeat scroll 0 0 transparent;
}
.social .twitter{
    background: url(<?php echo _img('tw_button.png'); ?>) no-repeat scroll 0 0 transparent;
}
.social .vkontakte{
    background: url(<?php echo _img('vk_button.png'); ?>) no-repeat scroll 0 0 transparent;
}
.social .lin{
    background: url(<?php echo _img('lin_button.png'); ?>) no-repeat scroll 0 0 transparent;
}
.content .hidden{
    display: none;
}
.hidden{
    display: none;
}

/* content END */


.content_tabs .right_content_text{
    width: 100%;
    padding-bottom: 20px;
    padding-left: 10px;
}

.right_content_text .title{
    color: #598644;
    font-size: 11pt;
}
.right_content_text .content_text{
    font-family: Arial;
    font-size: 11pt;
}
.content_tabs  .message{
    font-size: 11pt;
    color: red;
    font-weight: bold;
    padding-bottom: -25px;
    padding-left: 10px;
}
.content_tabs .tables_content{
    width: 100%;
    margin-top: 20px;
}
.tables_content .block_table{
    float: left;
    margin-top: 10px;
    width: 100%;
}

.tables_content .block_table .info_table{
    height: 35px;
    padding-top: 20px;
    width: 100%;
}
.tables_content .block_table .info_table .message{
    font-size: 11pt;
    color: #447B87;
    float: left;
}
.tables_content .block_table .info_table .icon_help{
    background: url(<?php echo _img('question.png'); ?>) no-repeat scroll 0 0 transparent; 
    width: 18px;
    height: 18px;
    float: left;
    margin-left: 10px;
    margin-right: 10px;

}
.tables_content .block_table .info_table .text{
    float: left;
    font-size: 9pt;
    width: 322px;
    margin-top: -5px;
}
.tables_content .block_table table{
    font-size: 10pt;
    width: 100%;
    border: 0;
    margin-bottom: 30px;
}
.tables_content .block_table table thead{
    background: gray;
    color: white;
    text-align: left;
}
.tables_content .block_table table thead th{
    border: 1px solid white;
    font-weight: normal;
}
.tables_content .block_table table tbody td{

    border-bottom: 1px solid gray;
}
.tables_content .block_table table tbody{
    font-size: 11pt;
}

.tables_content .block_table table .style_text{
    color: #447B87;
}
.tables_content .block_table table .style_text span{
    color: gray;
    float: right;
    font-size: 9pt;
    text-align: right;
    width: 150px;
}


.content_tabs .tables_content .block_table table .name {
    color: #447B87;
    float: left;
    width: 100%;
}

.content_tabs .tables_content .block_table table .name span {
    color: #447B87;
    float: left;
    width: 70px;
    font-size: 10pt;
}

.content_tabs .tables_content .block_table table .name .star {
    background: url(<?php echo _img('small_star.png'); ?>"../img/small_star.png") no-repeat scroll 0 0 transparent;
    float: left;
    height: 12px;
    margin-top: 3px;
    padding: 1px;
    width: 12px;
}

.content_tabs .tables_content .block_table table .slyle_response{
    font-size: 9pt;
    padding-top: 0;
    padding-bottom: 0;
}
.content_tabs .tables_content .block_table table .slyle_response a{
    font-size: 9pt;
    color: #447B87;
    text-decoration: none;
}

/*-----Paggination-------*/


.content_tabs .pager{
    float: right;
    width: 409px;
    height: 23px;

}
.pager a{
    text-decoration: none;
}
.pager .prev{
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

.pager .page{
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
.pager ._page{
    float: left;
    width: 10px;
    height: 20px;
    font-size: 10pt;
    margin-left: 5px;
    text-align: center;
    color: #48AACC;
}
.pager .next{
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
.pager .current{
    background: #447b87;
    color: white;
}

/*-----Paggination END-------*/
.line_horisontal{
    width: 100%;
    height: 2px;
    float: left;
    background: black;
    margin-bottom: 20px;
    margin-top: 40px;
}
.content_tabs .sort{
    font-size: 10pt;
    height: 20px;
    width: 96%;
}

.content_tabs .sort select{
    float: left;
    font-size: 9pt;

}

.content_tabs .sort .with_select{
    float: left;
    margin-left: 10px;
    margin-right: 10px;
    width: 250px;
    font-size: 9pt;
    margin-top: 2px;
    border: 1px solid #5B8648;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background: white;

}
.content_tabs .sort input{
    float: left;
    width: 12px;
    height: 12px;
    margin-right: 10px;
}

.yashare-auto-init {
    float: right;
    margin-bottom: 5px;
    margin-right: 55px;
    width: 965px
}
.b-share {
    float: right;
}



.content_tabs .random_reguests{
    float: left;
    width: 770px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.content_tabs .random_reguests .title{
    font-size: 11pt;
    color: #48AACC;
    padding-bottom: 10px;
}
.content_tabs .random_reguests .text{
    color: #5B5A5A;
}
.content_tabs .random_reguests .text span{
    font-weight: bold;
    font-size: 11pt;
}


.content_tabs .generation_search{
    width: 770px;
    height: auto;
    padding: 10px;
    float: left;
}
.content_tabs .generation_search .top_menu{
    width: 770px;
    height: 50px;
    float: left;
}
.content_tabs .generation_search .top_menu .sort{
    float: left;
    width: 315px;
}
.content_tabs .generation_search .top_menu .pager{
    float: right;
    width: 415px;

}
.content_tabs .generation_search .top_menu .pager a{
    text-decoration: none;
}
.content_tabs .generation_search .top_menu .pager .prev{
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

.content_tabs .generation_search .top_menu .pager .page{
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
.content_tabs .generation_search .top_menu .pager ._page{
    float: left;
    width: 10px;
    height: 20px;
    font-size: 10pt;
    margin-left: 5px;
    text-align: center;
    color: #48AACC;
}
.content_tabs .generation_search .top_menu .pager .next{
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
.content_tabs .generation_search .top_menu .pager .current{
    background: #447b87;
    color: white;
}
.content_tabs .generation_search .top_menu .sort select{
    border: 1px solid #5B8648;
    cursor: pointer;
    width: 150px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url(<?php echo  base_url(); ?>"css/PIE.htc"); 
}
.content_tabs .generation_search .top_menu .sort span{
    color: #5B5A5A;
    font-size: 11pt;
}
.content_tabs .generation_search .search_results{
    float: left;
    width: 765px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.content_tabs .generation_search .search_results .title{
    font-size: 15pt;
    color: #213d43;
}
.content_tabs .generation_search .search_results .date{
    font-size: 11pt;
    color: #5B5A5A;
    padding-top: 5px;
    padding-bottom: 5px;
}
.content_tabs .generation_search .search_results .text{
    font-family: Arial;
    padding-bottom: 10px;
    font-size: 11pt;
    width: 770px;
    float: left;
}
.content_tabs .generation_search .search_results .name span{
    color: #447B87;
    float: left;
    width: 70px;
}
.content_tabs .generation_search .search_results .name{
    color: #447B87;
    float: left;
    width: 770px;
}
.content_tabs .generation_search .search_results .name .star{
    background: url(<?php echo _img('small_star.png'); ?>) no-repeat scroll 0 0 transparent;
    float: left;
    height: 12px;
    margin-top: 3px;
    padding: 1px;
    width: 12px;
}

/*profile_view*/

.profile_content {
    height:auto;
    min-height:0;
}

.content .profile {
    float: left;
    height: auto;
    width: 220px;
}

.content .profile .left_part {
    width:220px;
    height:auto;
    
}

.content .profile .left_part .portfolio {
    background: none repeat scroll 0 0 #DEDEDE;
    height: 660px;
    text-align: center;
    width: 220px;
}

.content .profile .left_part .portfolio .portfolio_name {
    float:left;
    height:16px;
    width:180px;
    margin:20px 0px 0px 20px; 
    
   
}

.content .profile .left_part .portfolio .portfolio_rating {
    float:left;
    height:20px;
    width:180px;
    margin:15px 0px 0px 20px; 
       
}

.content .profile .left_part .portfolio .portfolio_photo {
    float:left;
    width:200px;
    height:235px;
    margin:15px 0px 0px 10px;
    border: 1px solid black;
   
} 

.content .profile .left_part .portfolio .portfolio_energy {   
    background: url( <?php echo _img('energy.png'); ?>) no-repeat scroll 0 0 transparent;
    float:left;
    width:200px;
    height:45px;
    border:1px solid black;
    margin: 18px 0px 0px 10px;  
}

.content .profile .left_part .portfolio .portfolio_energy .energy {
    color: green;
    float: left;
    font-size: 12px;
    font-weight: bold;
    margin: 3px 0 0 65px;
    border:0;
}
.content .profile .left_part .portfolio .portfolio_energy .energy td {
    float:left;
}
    
.content .profile .left_part .portfolio .user_info_statistic {
    float:left;
    text-align:left;
    width:200px;
    height:auto;
    margin:5px 10px 0 10px;
}

.content .profile .left_part .portfolio .user_info_statistic .info_div {
font-size: 14px;
font-weight: normal;

}

.content .profile .left_part .portfolio .user_info_statistic .info_div span {

font-weight: bold;

}

.content .profile .left_part .portfolio .user_info_statistic .second_info {
    margin-top: 20px;
}

.content .profile .left_part .news {
    height:auto;
    width:99%;
}

.content .profile .left_part .portfolio .portfolio_buttons {
    margin: 20px 0px 0px 9px;
    float:left;
    width:202px;
    height:100px;

    
}

.content .profile .left_part .portfolio .portfolio_buttons div {
    float:left;
    background: url( <?php echo _img('portfolio_button.png'); ?>) no-repeat scroll 0 0 transparent;
    width:202px;
    height:35px;
    padding-top:15px;
    color:white;
    font-size:14px;   
}

.content .main_content {
    float:left;
    width:770px; 
    height: auto;
    margin-left:30px;
}

.content .main_content .about_me {
    float:left;
    width:99%;
    min-height: 50px;
    border: 1px solid green;    
    font-family: Arial,Helvetica,sans-serif;
    font-style: italic;

}

.content .main_content .more_info {
    float:left;
    width:99%;
    height:auto;   
}

.content .main_content .more_info .info_div {
    float:left;
    width:99%;
    height:17px;
    margin-top:5px;
}
.content .main_content .more_info .info_div span {
font-weight: bold;
margin-left:5px;
}

.content .main_content .more_info .info_div .content_icon{
    height:17px;
    width:17px;
    background:grey;
    float:left;
    margin-top:2px;
    
}

.content .main_content .more_info .info_div .content_icon_status {
    background: url( <?php echo _img('content_icon_famaly.png'); ?>) no-repeat scroll 0 0 transparent;
}

.content .main_content .more_info .info_div .content_icon_age {
    background: url( <?php echo _img('content_icon_year18.png'); ?>) no-repeat scroll 0 0 transparent;
}

.content .main_content .more_info .info_div .content_icon_marital {
    background: url( <?php echo _img('content_icon_famaly.png'); ?>) no-repeat scroll 0 0 transparent;
}

.content .main_content .more_info .info_div .content_icon_skills {
    background: url( <?php echo _img('content_icon_help.png'); ?>) no-repeat scroll 0 0 transparent;
}

.content .main_content .more_info .info_div .content_icon_country{
      background: url( <?php echo _img('content_icon_city.png'); ?>) no-repeat scroll 0 0 transparent; 
      margin-top:4px;
}

.content .main_content .market_history {
    float: left;
    margin-top: 10px;
    max-height: 560px;
    min-height: 125px;
    width: 100%;
}

.content .main_content  .paragraph {
    background:grey;
    height:40px;
    width:100%;
    float:left;   
    margin-top:10px;
}

.content .main_content .paragraph .text {
    float:left;
    margin: 5px 0 0 10px;
    color: white;
    padding-top:5px;
}

.content .main_content .market_history .all_of_history {
    float: left;
    height: auto;   
    width: 100%;
    
}

.content .main_content .market_history .all_of_history .history {
    float:left;
    height:110px;
    width:100%;
    margin-top:20px;
}

.content .main_content .market_history .all_of_history .history .project_photo {
    float:left;
    height:110px;
    width:150px;

}

.content .main_content .market_history .all_of_history .history .project_photo .history_photo {
    float:left;
    height:90px;
    width:150px;
    background: #DEDEDE;

}

.content .main_content .market_history .all_of_history .history .project_photo .photo_info {
    float:left;
    height:20px;
    width:150px;   
    background:grey;
    color:white;
    font-size:14px;
    text-align:center;
}

.content .main_content .market_history .all_of_history .history .history_fild {
    float: left;  
    height: 100%;
    width: 600px;
    margin-left:20px;
}

.content .main_content .market_history .all_of_history .history .history_fild .history_rating{
    float:left;
    height: 18px;
    width:100%;
    background:grey;
}

.content .main_content .market_history .all_of_history .history .history_fild .history_about {
    background: none repeat scroll 0 0 #DEDEDE;
    float: left;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
    font-style: italic;
    height: 45px;
    width:100%;
    
    white-space: -moz-pre-wrap; /* Mozilla */
    white-space: -pre-wrap; /* Opera 4-6 */
    white-space: -o-pre-wrap; /* Opera 7 */
    word-wrap: break-word; /* Internet Explorer 5.5+ */
   /* margin: 5px 0 0 0px;
    overflow: hidden;
    padding: 0 5px 5px 15px;*/
}

.content .main_content .market_history .all_of_history .history .history_fild .user_comment {
    float:left;
    height: 42px;
    width:100%;       
    margin-top:5px;
    white-space: -moz-pre-wrap; /* Mozilla */
    white-space: -pre-wrap; /* Opera 4-6 */
    white-space: -o-pre-wrap; /* Opera 7 */
    word-wrap: break-word; /* Internet Explorer 5.5+ */
    
}

content .main_content .market_history .all_of_history .history .history_fild .user_comment .comment_rating {
    float:left;
    width:100%;
    height: 10px;
}


.content .main_content .market_history .all_of_history .history .history_fild .user_comment .comment_rating {
    float:left;
    height:15px;
    width:100%;
    
}

.content .main_content .market_history .all_of_history .history .history_fild .user_comment .comment_text {
    float:left;
    width:100%;
    height:27px;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    font-style: italic;
    padding-top: 5px;
}

.content .main_content .base_skills {
    float:left;
    width:100%;
    height:auto;
} 

.content .main_content .base_skills .educetion {
    float:left;
    height:auto;
    width:50%;   
}

.content .main_content .base_skills .paragraph    {
    float:left;
    height:auto;
    width:50%;  
}
/*profile_view_end*/


/*END*/
/*</style>*/