import 'slick-carousel';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import '../sass/main.scss';

jQuery(function ($) {
  $('.slick-slider').slick({
    slidesToShow: 3,
    arrows: true,
    dots: true,
  });
});