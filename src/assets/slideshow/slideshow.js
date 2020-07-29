$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
    let owl = $('.owl-carousel');
    $('.owl-carousel').owlCarousel({
      items:1,
      loop:true,
      margin:0,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      dots:true
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