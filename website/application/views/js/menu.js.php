/*<script type="text/javascript">*/
               
        $(document).ready(function()
    {   
        $('.main_menu').find('a').live('mouseenter', function()
        {
            var menu_id=$(this).attr('id');
                    
            $(this).addClass( 'active' );
            $('.menu_listing > ul').css('display','none');                
            $("ul[for=" + menu_id + "]").css('display','inline'); 
                    
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
                                        

    /*</script>*/