document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    M.Carousel.init(elems,{
        fullWidth: true,
        indicators: true
    });
    
    var elems = document.querySelectorAll('.slider');
    M.Slider.init(elems,{
        height: 1000
    });
  });
