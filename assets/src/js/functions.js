jQuery(function ($) {
  $('.slick-slider').slick({
    slidesToShow: 3,
    arrows: true,
    dots: true,
    lazyLoad: false,
    accessibility: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,

        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,

        }
      }
    ]
  });
});