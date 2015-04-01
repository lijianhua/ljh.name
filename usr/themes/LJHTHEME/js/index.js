$(document).ready(function(){
    $(window).scroll(function(){
        var top = $(this).scrollTop();
        if(top > 100){
            $(".go-top").show();
        }else{
            $(".go-top").hide();
        }
    });

    $(".go-top a").click(function(event){
        event.preventDefault();
        $("html,body").animate({scrollTop:0},1000);
    })
})