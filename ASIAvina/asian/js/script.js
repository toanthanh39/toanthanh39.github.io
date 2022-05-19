
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()>=200){
            $('.site-header').addClass('fixed');
            
            
          
        }else{
            $('.site-header').removeClass('fixed');
        }
        
    })
    
    $('#search-hide').on('click',function(e){
        
       $('.form-search').toggle(200,'swing');

       $('.search-outer').fadeIn();
       
    })
   

    $('.close').on('click',function(){
        $('.search-outer').fadeOut();
       
    })
    $('#search-icon2').on('click',function(){
        $('#input-search').focus();
        
    })
    

})