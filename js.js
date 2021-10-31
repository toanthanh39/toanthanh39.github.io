var toogle = document.querySelector('menu');

$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()>=150){
            $("ul.main_menu").addClass('block');
            $("a.link").addClass('animation');
            $(".header").removeClass("")
        }else{
            $("ul.main_menu").removeClass('block');
            $("a.link").removeClass('animation');
        } 

    })
        
});