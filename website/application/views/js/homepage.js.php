/*<script type="text/javascript">*/
        
jQuery(document).ready(function(){
    var params = {
        changedEl: "#select_usa, .search_select select",
        visRows: 2,
        scrollArrows: true
    }
    cuSel(params);
    $("#slides").slides(/*{
                    play: 5000,
                    pause: 2500,
                    hoverPause: true
                }*/);
 
    jQuery(".ul").mouseenter(function(){
        $(this).find('span').css('display','inline');
    }).mouseleave(function(){
        $(this).find('span').css('display','none');
    });
    
    
    $('.user_name').click(function(){
        window.location.href="profile.html";
    });
   
   
});

/*</script>*/