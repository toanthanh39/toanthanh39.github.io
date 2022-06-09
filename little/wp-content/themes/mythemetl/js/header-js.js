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
 const overflow_ticket=document.getElementsByClassName("overflow-ticket");
 


jQuery(document).ready(function($){
  
  
  
  
  
  
 
    $(window).scroll(function(){
        if($(this).scrollTop()>=120){
            $('.site-header').addClass('fixed');
            
            
          
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
        var contentWidth=$(overflow_ticket).innerWidth();
        var marginleft = $(overflow_ticket).offset();
        let overleft =marginleft.left;
        let unsigle_overleft=Math.abs(overleft);
        var min_width = contentWidth-unsigle_overleft;
        let total =min_width+unsigle_overleft;
        // console.log("next");
        console.log(unsigle_overleft);
        console.log(contentWidth);
        console.log(min_width);
        // console.log(total);

        
       
  
         if(min_width<=1280){
          $('.overflow-ticket').off();
       
       }else{
        $('.overflow-ticket').animate({
          marginLeft: '-='+off_scroll+'px' ,
         
        }, "fast");
          
       }
      });
      
      $(pre_ticket).click(function() {
       
        var marginleft = $(overflow_ticket).offset();
        let overleft =marginleft.left;
          

        if(overleft<-500){
          $('.overflow-ticket').animate({
            marginLeft: '+='+off_scroll+'px',
          }, "fast");
        }else{
        $('.overflow-ticket').off();
            }

      });
     
   

       
});



    

