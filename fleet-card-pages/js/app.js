// slick
$(".product-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".product-thumbnail",
    autoplay: false,
  });

  $(".product-thumbnail").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".product-slider",
    dots: false,
    arrows: false,
    focusOnSelect: true,
    loop: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },

    ],
  });

  // slick
