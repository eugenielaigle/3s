function slideblock(){$(".half-block-left").animate({left:0},{queue:!1,duration:800}),$(".half-block-right").animate({right:0},800,function(){slideimginside(),slidetextinside(),closeslide()})}function slideimginside(){$(".img-slide").animate({width:"45%",opacity:1},800)}function slidetextinside(){$(".slide-inside").animate({marginLeft:"0",opacity:1},800)}function closeslide(){$("#closeBlockSlide").click(function(){closeslideblock(),serviceanimation()})}function closeslideblock(){$(".half-block-left").animate({left:"-500px"},{queue:!1,duration:350}),$(".half-block-right").animate({right:"-1000px"},350,function(){$(".block-slide").removeClass("block-slide-active",{duration:200,effect:"blind"}),$(".block-inside").removeClass("activity"),$(".class-title").removeClass("active")})}$(window).load(function(){function t(){$(".loader").length&&(e>100?(clearInterval(o),$(".loader").addClass("transparent"),$("#myProgress").animate({opacity:"0"},100,function(){$(".loader").fadeOut("1000")}),$("#content").css("opacity","1"),$(".navbar").css("opacity","1"),$(".loader").queue(function(){window.matchMedia("(min-width: 768px)").matches?$("#opening").animate({width:"60%"},1e3,function(){$("#author").animate({bottom:"-2vh",opacity:"1"},400)}):$("#opening").animate({width:"220%"},1e3,function(){$("#author").animate({bottom:"-2vh",opacity:"1"},400)}),$(".loader").dequeue()})):(e++,document.getElementById("percentage").value=i.style.width,i.style.width=e+"%"))}var i=document.getElementById("myBar"),e=1,o=setInterval(t,10);$("#percentage")}),$(document).ready(function(){$("#content").css("opacity","1"),$(".navbar").css("opacity","1"),window.matchMedia("(min-width: 768px)").matches?$("#openingwithoutloader").animate({width:"60%"},1e3,function(){$("#author").animate({bottom:"-2vh",opacity:"1"},400)}):$("#openingwithoutloader").animate({width:"220%"},1e3,function(){$("#author").animate({bottom:"-2vh",opacity:"1"},400)})}),$(document).scroll(function(){$(window).width()>767&&$(window).width()<2e3?$(window).scrollTop()>10?($("#brand").css({overflow:"visible!important",width:"5vw",marginTop:"-1.5vh"}),$(".navbar").addClass("nav-position")):$(window).scrollTop()<10&&($("#brand").css({width:"20vw",marginTop:"-11vh"}),$(".navbar").removeClass("nav-position")):$(window).width()>2e3?$(window).scrollTop()>10?($("#brand").css({overflow:"visible!important",width:"2.5vw",marginTop:"-0.5vh"}),$(".navbar").addClass("nav-position")):$(window).scrollTop()<10&&($("#brand").css({width:"18vw",marginTop:"-10.5vh"}),$(".navbar").removeClass("nav-position")):$(window).width()<767&&($(window).scrollTop()>10?($("#brand").css({overflow:"visible!important",width:"15vw",marginTop:"-1.5vh",marginLeft:"35vw"}),$(".navbar").addClass("nav-position")):$(window).scrollTop()<10&&($("#brand").css({width:"40vw",marginTop:"-6vh",marginLeft:"17vw"}),$(".navbar").removeClass("nav-position")))}),$(".bouton").click(function(){$(".section-qsn").toggleClass("sq-zindex"),$(this).toggleClass("btn-active"),setTimeout(function(){$(".modal-content").toggleClass("modal-active"),$("#bouton").hasClass("btn-active")&&!$("#historic").hasClass("active")&&$("#historic").addClass("active")},400)}),$(".modal-close").click(function(){$(this).toggleClass("btn-active"),$(this).removeClass("btn-active")}),$("#historique").click(function(){$(".section-qsn").toggleClass("sq-zindex"),$(".bouton").toggleClass("btn-active"),setTimeout(function(){$(".modal-content").toggleClass("modal-active"),$("#bouton").hasClass("btn-active")&&!$("#historic").hasClass("active")&&$("#historic").addClass("active")},400)}),$(document).ready(function(){function t(){$("#scrolldown span").fadeIn("fast").animate({top:"30px"},1e3,function(){$("#scrolldown span").fadeOut("fast",function(){$("#scrolldown span").css({top:"5px"},100,function(){t()})})})}t(),setInterval(t,1500)}),$(window).width()>767?($(document).ready(function(){$("#service1").click(function(){$("#btn_vente").toggleClass("active"),$("#vente").toggleClass("activity"),$(".block-slide").toggleClass("block-slide-active"),slideblock()}),$("#service2").click(function(){$("#btn_reparation").toggleClass("active"),$("#reparation").toggleClass("activity"),$(".block-slide").toggleClass("block-slide-active"),slideblock()}),$("#service3").click(function(){$("#btn_location").toggleClass("active"),$("#location").toggleClass("activity"),$(".block-slide").toggleClass("block-slide-active"),slideblock()}),$("#service4").click(function(){$("#btn_entretien").toggleClass("active"),$("#entretien").toggleClass("activity"),$(".block-slide").toggleClass("block-slide-active"),slideblock()})}),$(".class-title").click(function(){$(".block-inside").removeClass("activity")}),$("#btn_vente").click(function(){$(".class-title").removeClass("active"),$(this).toggleClass("active"),$("#vente").toggleClass("activity")}),$("#btn_reparation").click(function(){$(".class-title").removeClass("active"),$(this).toggleClass("active"),$("#reparation").toggleClass("activity")}),$("#btn_location").click(function(){$(".class-title").removeClass("active"),$(this).toggleClass("active"),$("#location").toggleClass("activity")}),$("#btn_entretien").click(function(){$(".class-title").removeClass("active"),$(this).toggleClass("active"),$("#entretien").toggleClass("activity")})):($(".orange").click(function(){$(".block-below").slideUp(),$(this).next(".block-below").slideDown(500,"swing")}),$(".close-block-slide").click(function(){})),$('a[href^="#"]').on("click",function(t){var i=$(this.getAttribute("href"));i.length&&(t.preventDefault(),$("html, body").stop().animate({scrollTop:i.offset().top},1e3))}),$(document).ready(function(){$.scrollify({section:".panel",standardScrollElements:".overflowscroll"})}),$(document).ready(function(){setInterval(function(){$(".slideshow ul").animate({marginLeft:-300},800,function(){$(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"))})},3500)}),jQuery(".same-class").click(function(){jQuery(".same-class").removeClass("active"),jQuery(this).addClass("active")}),$(window).load(function(){var t,i=$("#top-menu"),e=i.outerHeight()+15,o=i.find("a"),a=o.map(function(){var t=$($(this).attr("href"));if(t.length)return t});o.click(function(t){var i=$(this).attr("href"),o="#"===i?0:$(i).offset().top-e+1;$("html, body").stop().animate({scrollTop:o},300),t.preventDefault()}),$(window).scroll(function(){var i=$(this).scrollTop()+e,n=a.map(function(){if($(this).offset().top<i)return this});n=n[n.length-1];var s=n&&n.length?n[0].id:"";t!==s&&(t=s,o.parent().removeClass("active").end().filter("[href=#"+s+"]").parent().addClass("active"))})});