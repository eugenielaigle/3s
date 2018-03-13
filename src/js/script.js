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
          if (window.matchMedia("(min-width: 768px)").matches) {
            /* La largeur minimum de l'affichage est 768 px inclus */
            $("#opening").animate({
              width: "60%"
            }, 1000, function(){
              $("#author").animate({
                bottom: "-2vh",
                opacity: "1"
              }, 400);
            });
          } else {
            /* L'affichage est inférieur à 768px de large */
            $("#opening").animate({
              width: "80%"
            }, 1000, function(){
              $("#author").animate({
                bottom: "-2vh",
                opacity: "1"
              }, 400);
            });
          }

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
  if (window.matchMedia("(min-width: 768px)").matches) {
    /* La largeur minimum de l'affichage est 768 px inclus */
    $("#openingwithoutloader").animate({
      width: "60%"
    }, 1000, function(){
      $("#author").animate({
        bottom: "-2vh",
        opacity: "1"
      }, 400);
    });
  } else {
    /* L'affichage est inférieur à 768px de large */
    $("#openingwithoutloader").animate({
      width: "80%"
    }, 1000, function(){
      $("#author").animate({
        bottom: "-2vh",
        opacity: "1"
      }, 400);
    });
  }
  // $("#openingwithoutloader").animate({
  //   width: "60%"
  // }, 1000);
});

// ANIMATION MENU ON TOP + BRAND SIZE

$(document).scroll(function() {
  if ($(window).width()> 767){
   if($(window).scrollTop()> 10){
    $("#brand").css({
      overflow: "visible!important",
      width: "5vw",
      marginTop: "-1.5vh"
    });
    $(".navbar").addClass('nav-position');
    // });
  }else if ($(window).scrollTop()< 10){
    $("#brand").css({
      width: "20vw",
      marginTop: "-11vh"
    });
    $(".navbar").removeClass('nav-position');
    // });
  }
}
});

// BOUTON > MODAL

$(".bouton").click(function(){
  $(this).toggleClass("btn-active");
  setTimeout(function(){
    $(".modal-content").toggleClass("modal-active");
    $("#historic").toggleClass("active");
  }, 400);

});

$(".modal-close").click(function(){
  $(this).toggleClass("btn-active");
  $(this).removeClass("btn-active");

});



// ONCLICK HISTORIC

$("#historique").click(function(){
  $(".bouton").toggleClass("btn-active");
  setTimeout(function(){
    $(".modal-content").toggleClass("modal-active");
    $("#historic").toggleClass("active");
  }, 400);

});

// SCROLL DOWN BUTTON

function scrollMe(){
$("#scrolldown span").fadeIn("fast").animate({
      top: "40px"}
      ,1000, function() {
        $("#scrolldown span").fadeOut("fast", function() {
          $("#scrolldown span").css({
              "top": "5px"
          },100, function(){
            scrollMe();
          });
        });
      });
}

$( document ).ready(function() {
    scrollMe();
    setInterval("scrollMe();",1500);
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
    duration: 350
  });
  $(".half-block-right").animate({
   right: "-1000px"
 }, 350, function(){
  $(".block-slide").removeClass('block-slide-active', {duration:200,effect:'blind'});
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
    standardScrollElements: ".overflowscroll",
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


// MENU ACTIVE SWITCH

$(window).load(function(){
// Cache selectors
var lastId,
topMenu = $("#top-menu"),
topMenuHeight = topMenu.outerHeight()+15,
// All list items
menuItems = topMenu.find("a"),
// Anchors corresponding to menu items
scrollItems = menuItems.map(function(){
  var item = $($(this).attr("href"));
  if (item.length) { return item; }
});

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
  offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({
    scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
// Get container scroll position
var fromTop = $(this).scrollTop()+topMenuHeight;

// Get id of current scroll item
var cur = scrollItems.map(function(){
  if ($(this).offset().top < fromTop)
    return this;
});
// Get the id of the current element
cur = cur[cur.length-1];
var id = cur && cur.length ? cur[0].id : "";

if (lastId !== id) {
  lastId = id;
// Set/remove active class
menuItems
.parent().removeClass("active")
.end().filter("[href=#"+id+"]").parent().addClass("active");
}
});
});


