$(function(){
    $(".jsbutton").each(function()
    {
        var link = $(this).data('link');
        if(link != null && link != undefined && link !='' )
        {
            $(this).bind('click',function(){
                window.location.replace(base_url + link);
            });
        }
        
        
    });
    
});