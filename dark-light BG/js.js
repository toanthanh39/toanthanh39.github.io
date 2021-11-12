var toogle = document.querySelector('menu');

$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()>=150){
            $("ul.main_menu").addClass('block');
            $("a.link").addClass('animation');
           
          
        }else{
            $("ul.main_menu").removeClass('block');
            $("a.link").removeClass('animation');
           
        } 
        
    })
        
});
    var slides = document.querySelectorAll('.thumb');
    var content = document.querySelector('.content-slide');
    console.log(content);

    console.log(slides);


    function changeimg(){
    slides.forEach(silde => silde.classList.remove('active'));
    this.classList.add('active');
    content.getElementsByTagName('img')[0].src=
    this.getElementsByTagName('img')[0].src;
    console.log(this.getElementsByTagName('img')[0].src);
    
    }
    slides.forEach(slide => slide.addEventListener('click',changeimg));