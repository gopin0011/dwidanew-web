(function ($) {
  "use strict";

  var best_product_slider = $('.best_product_slider');
  if (best_product_slider.length) {
    best_product_slider.owlCarousel({
      items: 4,
      loop: true,
      dots: false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: true,
      navText: ["next", "previous"],
      responsive: {
        0: {
          margin: 15,
          items: 1,
          nav: false
        },
        576: {
          margin: 15,
          items: 2,
          nav: false
        },
        768: {
          margin: 30,
          items: 3,
          nav: true
        },
        991: {
          margin: 30,
          items: 4,
          nav: true
        }
      }
    });
  }
  

 var product_overview = $('#vertical');
 if(product_overview.length){
  product_overview.lightSlider({
    gallery:true,
    item:1,
    vertical:true,
    verticalHeight:450,
    thumbItem:3,
    slideMargin:0,
    speed:600,
    autoplay: true,
    responsive : [
      {
          breakpoint:991,
          settings: {
              item:1,
              
            }
      },
      {
          breakpoint:576,
          settings: {
              item:1,
              slideMove:1,
              verticalHeight:350,
            }
      }
  ]
  });  
 }
    



}(jQuery));