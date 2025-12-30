jQuery(function($) {
    $('.slick-slider').slick({
      slidesToShow: 3,
      arrows: true,
      dots: true,
      lazyLoad: false // Disable lazyLoad to avoid ajax-loader.gif path issues
    });
  });