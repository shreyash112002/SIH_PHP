$(document).ready(function(){

    //Banner owl Carousel
    //$("#banner-area .owl-carousel").owlCarousel({
      //  dots: true,
     //   items: 1
   // });


 $('.select1').on('change', function(){
  var data= $(this).children("option:selected").text();
  $('#demo1').text(data);
 });
 $('.select2').on('change', function(){
  var data= $(this).children("option:selected").text();
  $('#demo2').text(data);
 });


});
