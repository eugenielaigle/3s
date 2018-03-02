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
          $("#opening").animate({
            width: "60%"
          }, 1000);

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

// Animation texte d'accueil sans variable de session

$(document).ready(function(){
  $("#openingwithoutloader").animate({
    width: "60%"
  }, 1000);
});


// BOUTON MODAL

$(".bouton").click(function(){
  $(this).toggleClass("btn-active");
  setTimeout(function(){
    $(".modal-content").toggleClass("modal-active");
  }, 400);

});

$(".modal-close").click(function(){
  $(this).toggleClass("btn-active");
  $(this).removeClass("btn-active");
});



// ONCLICK CAR BLOCK ANIMATION

$(document).ready(function serviceanimation(){
  $("#service1").click(function(){
    $("#btn_vente").toggleClass('active');
    $("#vente").toggleClass('activity');
    $(".block-slide").toggleClass('block-slide-active');
    slideblock();
  });

  $("#service2").click(function(){
    $("#btn_reparation").toggleClass('active');
    $("#reparation").toggleClass('activity');
    $(".block-slide").toggleClass('block-slide-active');
    slideblock();
  });

  $("#service3").click(function(){
    $("#btn_location").toggleClass('active');
    $("#location").toggleClass('activity');
    $(".block-slide").toggleClass('block-slide-active');
    slideblock();
  });

  $("#service4").click(function(){
    $("#btn_entretien").toggleClass('active');
    $("#entretien").toggleClass('activity');
    $(".block-slide").toggleClass('block-slide-active');
    slideblock();
  });
});

// SWITCH BLOCK LEFT

$(".class-title").click(function(){
  $(".block-inside").removeClass('activity');
});

$("#btn_vente").click(function(){
  $(".class-title").removeClass('active');
  $(this).toggleClass('active');
  $("#vente").toggleClass('activity');
});

$("#btn_reparation").click(function(){
  $(".class-title").removeClass('active');
  $(this).toggleClass('active');
  $("#reparation").toggleClass('activity');
});

$("#btn_location").click(function(){
  $(".class-title").removeClass('active');
  $(this).toggleClass('active');
  $("#location").toggleClass('activity');
});

$("#btn_entretien").click(function(){
  $(".class-title").removeClass('active');
  $(this).toggleClass('active');
  $("#entretien").toggleClass('activity');
});


// ANIMATION BLOCS SERVICES

function slideblock(){
  $(".half-block-left").animate({
    left: 0
  }, {
    queue: false,
    duration: 800
  });
  $(".half-block-right").animate({
   right: 0
 }, 800, function(){
  slideimginside();
  slidetextinside();
  closeslide();
});
}

function slideimginside(){
  $(".img-slide").animate({
    width: "45%",
    opacity: 1
  }, 800)
}

function slidetextinside(){
  $(".slide-inside").animate({
    left: "20%",
    opacity: 1
  }, 800)
}

function closeslide(){
  $("#closeBlockSlide").click(function(){
    closeslideblock();
    serviceanimation();
  });
}

function closeslideblock(){
  $(".half-block-left").animate({
    left: "-500px"
  }, {
    queue: false,
    duration: 800
  });
  $(".half-block-right").animate({
   right: "-1000px"
 }, 800, function(){
  $(".block-slide").removeClass('block-slide-active');
  $(".block-inside").removeClass('activity');
  $(".class-title").removeClass('active');
});
}

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

// SLIDER PARTENAIRES


$(function(){
  setInterval(function(){
   $(".slideshow ul").animate({marginLeft:-300},800,function(){
    $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
  })
 }, 3500);
});


//SLICK

// $(document).ready(function(){
//   $('.slider-for').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: false,
//     fade: true,
//     asNavFor: '.slider-nav'
//   });

//   $('.slider-nav').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     asNavFor: '.slider-for',
//     dots: true,
//     centerMode: true,
//     focusOnSelect: true,
//     vertical: true
//   });
// });


jQuery('.same-class').click(function(){
  jQuery('.same-class').removeClass('active');
  jQuery(this).addClass('active');
});


