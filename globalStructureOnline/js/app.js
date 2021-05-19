// ========================================= Owl carousel ============================================================//
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    center:false,
    navText : ["<img src='./images/back.png' class='arrows'>","<img src='./images/forword.png' class='arrows'>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

    $(document).ready(function () {

        setTimeout(function () {
          $('.preloader').fadeOut(100);
        }, 1000);
    
      });


      new WOW().init();
