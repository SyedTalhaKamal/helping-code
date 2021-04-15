       // Slider | Product
       $('.one-product__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.one-product__slider_navigation',
        arrows: false,
        dots: false,
        infinite: true,
        focusOnSelect: true,
        fade: true,
        cssEase: 'linear'
      });
    
       // Slider | one-product-slider
       $('.one-product__slider_navigation').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: true,
        asNavFor: '.one-product__slider',
        focusOnSelect: true,
        centerMode: false,
        vertical: true,
        prevArrow:
          "<button type='button' class='slick-prev pull-left'><i class='fas fa-caret-up'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next pull-right'><i class='fas fa-caret-down'></i></i></button>",
        responsive: [
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              vertical: false,
              arrows: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              vertical: false,
              arrows: false
            }
          }
        ]
      });
