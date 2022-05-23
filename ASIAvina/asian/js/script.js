
$(document).ready(function(){
    // fixed header
    $(window).scroll(function(){


        if($(this).scrollTop()>=200){
            $('.site-header').addClass('fixed');
            
            
          
        }else{
            $('.site-header').removeClass('fixed');
        }
        
    })
    // toggle search
    $('#search-hide').on('click',function(e){
        
       $('.form-search').toggle(200,'swing');

       $('.search-outer').fadeIn();
       
    })
   

    $('.close').on('click',function(){
        $('.search-outer').fadeOut();
       
    })
    //
    // input on focus
    $('#search-icon2').on('click',function(){
        $('#input-search').focus();
        
    })
    // need help toggle
    $('#help').on('click',function(e){
       
        $('#need-help-outer').fadeIn();
        
       
    })
    $('.box-help-close').on('click',function(){
        $('#need-help-outer').fadeOut();
    })
    // form stop load 
    $("#help-form").submit(function(e) {
        alert('Send message success');
        e.preventDefault(); 
        this.reset();
    });

})