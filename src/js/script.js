//LOADER

$(window).load(function() {
  var elem = document.getElementById("myBar");
  var width = 1;
  var id = setInterval(frame, 10);

  function frame() {
    if ($('.loader').length){
      if (width >= 100) {
        clearInterval(id);
        $(".loader").addClass("transparent");
        $("#myProgress").animate({
          left: "5%",
          top: "5%",
          width: "5%",
          opacity: "0.25"
        }, 1000, function() {
          $(".loader").fadeOut('1000');
        });
        // Dès que le loader se termine, le texte entre guillemets s'anime
        $(".loader").queue(function() {
          $("#fadeinleft").animate({
            width: "60%"
          }, 3000);

          $(function () {
            $('.tlt').textillate({ in: { effect: 'fadeInLeft' } });
          });
          // Fin de l'animation texte
        $(".loader").dequeue();
          // Fin du loader
        });
        //
      } else {
        width++;
        elem.style.width = width + '%';
      }
    }
  }
});


$(document).ready(function(){
$("#fadewithoutloader").animate({
    width: "60%"
  }, 3000);

  $(function () {
    $('.tlt').textillate({ in: { effect: 'fadeInLeft' } });
  });
});



// SMOOTH SCROLL

$('a[href^="#"]').on('click', function(event) {
  var target = $(this.getAttribute('href'));
  if( target.length ) {
    event.preventDefault();
    $('html, body').stop().animate({
      scrollTop: target.offset().top
    }, 1000);
  }
});

//SCROLLIFY

$ (function () {
  $ .scrollify ({
    section: ".panel",
  });
});

//SLICK

$(document).ready(function(){
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });

  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    vertical: true
  });
});




