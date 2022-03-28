
 const width=overflow_ticket.offsetHeight;
 console.log(width);
  $(window).on('load',function(){
    
    $("#onload-page").css("display","none");
   }) ;
  
  $(document).ready(function() {
    $("form").submit(function() {
      $(".message-hidden").removeClass('hidden');
      // document.getElementById("form-checkout-home").reset();
      $("img#x").click(function() {
        $(".message-hidden").addClass('hidden');
        document.getElementById("form-contact").reset();
      });
    });
    $("form#form-checkout-home").submit(function(){
      
    })
  })
 
   