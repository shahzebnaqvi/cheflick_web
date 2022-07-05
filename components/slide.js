  $(".slick-slider").slick({
   slidesToShow: 3,
   infinite:false,
   slidesToScroll: 1,
   autoplay: true,
   autoplaySpeed: 2000
     // dots: false, Boolean
    // arrows: false, Boolean
  });
$('#profileDrop').click(function(){
  $('#dropMenuCart').removeClass('show');
});
$('#dropMenu').click(function(){
  $('#profileDropdown').removeClass('show');
});

