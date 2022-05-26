;
jQuery(function($){
   
    $('.owlcarousel1').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,      
        margin:5,
        nav:true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:3,
            margin:3
        },
        1200:{
            items:7,
            margin:10
           
            
        }
    }
    });
    $('.about-owl').owlCarousel({
        loop:false,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,      
        margin:10,
        nav:true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1290:{
            items:4,
            
        }
    }
    });
    $('.product-owl').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,      
        margin:10,
        nav:true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1290:{
            items:1,
            
        }
    }
    })
    
    
});
