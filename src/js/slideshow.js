$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
    let owl = $('.owl-carousel');
    $('.owl-carousel').owlCarousel({
      items:5,
      loop:true,
      margin:15,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      dots:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:false
          },
          1000:{
              items:3
          }
      }
  })
owl.on('mousewheel', '.owl-stage', function (e) {
  if (e.deltaY>0) {
    owl.trigger('next.owl');
  } 
  else {
    owl.trigger('prev.owl');
  }
  e.preventDefault();
});