/**
 * File header-js.js.
 *
 */
 const pre_ticket=document.getElementsByClassName("ticket-pre");
 const next_ticket=document.getElementsByClassName("featured-next")
 const button_pre=document.getElementsByClassName("featured-pre");
 const button_next=document.getElementsByClassName("featured-next");
 const slides=document.getElementsByClassName("featured-post-container");
 const loading=document.getElementById("onload-page");
 let off_scroll = 1240;
 const overflow_ticket=document.getElementById('off');

jQuery(document).ready(function($){
  
  

          
    $(window).scroll(function(){
        if($(this).scrollTop()>=120){
            $('.site-header').addClass('fixed');
            console.log("hello");
            
          
        }else{
            $('.site-header').removeClass('fixed');
        }
        
    })
    
    $(button_next).click(function() {
        
        $('#ct').animate({
          scrollLeft: "+=230px"
        }, "fast");
        
      });
      $(button_pre).click(function() {
       
        $('#ct').animate({
          scrollLeft: "-=230px"
        }, "fast");
        
      });
      
      $(next_ticket).click(function() {
        
        $('.overflow-ticket').animate({
          marginLeft: '-='+off_scroll+'px' ,
          
        }, "fast");
       

        // if(off_scroll>="-"+overflow_ticket.offsetWidt);
      });
      $(pre_ticket).click(function() {
        console.log("ok");
       
        $('.overflow-ticket').animate({
          marginLeft: '+='+off_scroll+'px'
        }, "fast");
        
      });
     
   

       
});



    

