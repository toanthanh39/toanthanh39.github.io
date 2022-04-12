 
   $(window).on("load",function(){
    
    $('#onload-page').css("display","none");
  
   

   });  
  $(document).ready(function() {
    
    // $(document).ready(function(){	
    //   $('#onload-page').fadeOut(2000);
    // });
    $("form").submit(function() {
      $(".message-hidden").removeClass('hidden');
     
      $("img#x").click(function() {
        $(".message-hidden").addClass('hidden');
        document.getElementById("form-contact").reset();
      });
    });
    $("form#form-checkout-home").submit(function(){
      
    })
  })
 
   