$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    center: true,
    loop: true,
    margin: 30,
    nav: false,
    autoplay: true,
    // autoplayTimeout: 5000,
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
});

// $(".owl-carousel").slick({
//   infinite: true,
//   slidesToShow: 3,
//   slidesToScroll: 3,
// });
