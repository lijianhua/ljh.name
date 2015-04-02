$(document).ready(function(){
    $(window).scroll(function(){
        var top = $(this).scrollTop();
        if(top > 100){
            $(".go-top").show();
        }else{
            $(".go-top").hide();
        }
    });

    $(".go-top").click(function(){
            $("html,body").animate({scrollTop:0},1000);
    })
})
