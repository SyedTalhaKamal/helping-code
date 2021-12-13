// ========================================= Owl carousel ============================================================//
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: true,
  center: false,
  navText: [
    "<img src='./images/back.png' class='arrows'>",
    "<img src='./images/forword.png' class='arrows'>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});

$(document).ready(function () {
  setTimeout(function () {
    $("#ctn-preloader").addClass("loaded");
    // Una vez haya terminado el preloader aparezca el scroll
    $("body").removeClass("no-scroll-y");

    if ($("#ctn-preloader").hasClass("loaded")) {
      // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
      $("#preloader")
        .delay(1000)
        .queue(function () {
          $(this).remove();
        });
    }
  }, 600);
});

new WOW().init();
