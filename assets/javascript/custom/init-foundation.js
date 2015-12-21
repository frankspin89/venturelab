jQuery(document).foundation();
(function() {
  'use strict';
  jQuery(document).ready(function($) {
    $('#searchsubmit').hover(function() {
      console.log('hover');
      $(this).closest('#searchform').find('.search-input-wrapper').removeClass("hidden");
    });

    $('.slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 500,
      dots: false,
      autoplay: true,
      autoplaySpeed: 4000,
    });

  });
}());
