
document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = document.getElementById('carouselExample');
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 2000,
      ride: 'carousel'
    });
  
    
    var carouselImages = document.querySelectorAll('#carouselExample .carousel-item img');
  
    carouselImages.forEach(function (img) {
      img.addEventListener('mouseenter', function () {
        carousel.pause(); 
      });
  
      img.addEventListener('mouseleave', function () {
        carousel.cycle(); 
      });
    });
  });
  