// import("../libs/jquery/dist/jquery.min.js");
// import("../libs/slick/slick.min.js");
// notimport("../libs/niceSelect/jquery.nice-select.min.js");
// notimport("../libs/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js");
// import("../libs/waypoint/jquery.waypoints.min.js");
// import("../libs/masked-input.min.js");
// notimport("../libs/circlefull.min.js");
// import("../libs/scrollToId/jquery.malihu.PageScroll2id.js");
// import("../libs/magnific-popup/js/jquery.magnific-popup.min.js");
// notimport("../libs/countdown/jquery.countdown.min.js");
// import("../libs/clipboard.min.js");

$(function() {
//  hide input, textarea placeholder  ==================
 $('input,textarea').focus(function(){
   $(this).data('placeholder',$(this).attr('placeholder'))
   $(this).attr('placeholder','');
 });
 $('input,textarea').blur(function(){
   $(this).attr('placeholder',$(this).data('placeholder'));
 });
// end  ==================

$(".phone").mask("+7(999) 999-99-99"); // mask for phone number

// pulse Animation  ==================
	$('.pulse, .btn').each(function() {
    var $this = $(this);

    var ink, d, x, y;

    setInterval(function() {
      if($this.find(".ink").length === 0){
        $this.prepend("<span class='ink'></span>");
      }

      ink = $this.find(".ink");
      ink.removeClass("animate");

      if(!ink.height() && !ink.width()){
        d = Math.max($this.outerWidth(), $this.outerHeight());
        ink.css({height: d, width: d});
      }

      x = Math.round(Math.random()*ink.width() - ink.width()/2);
      y = Math.round(Math.random()*ink.height() - ink.height()/2);
                // y = 0;
                // x = e.pageX - $this.offset().left - ink.width()/2;
                // y = e.pageY - $this.offset().top - ink.height()/2;

                ink.css({top: y+'px', left: x+'px'}).addClass("animate");
              }, 3000)
  });
// end  ==================

// gallery in slider
$('.equip-unit-slider').each(function(indx){
    $(this).find('a.slide').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
          verticalFit: true
        },
        gallery: {
          enabled: true
        },
        zoom: {
          enabled: true,
          duration: 300, // don't foget to change the duration also in CSS

        }
        });
  });
// end

// all EQUIPMENT slider
$(".equip-slider").slick({
    arrows: true,
    infinite: true,
    swipe: false,
    nextArrow: '<i class="fa fa-angle-right"></i>',
    prevArrow: '<i class="fa fa-angle-left"></i>',
    waitForAnimate: false,
  }).on({
  beforeChange: function(event, slick, currentSlide, nextSlide) {
    $(".equipment .tabs .tab").removeClass("active");

    $(".equipment .tabs .tab").each(function(i){
      if(+$(this).data("toslide") - 1 === nextSlide){
        $(this).addClass("active");
      }
    });
  }
});


// end

// ITEM slider
  $(".equip-unit-slider").slick({
    infinite: true,
    dots: true,
    arrows: false,
    slidesToScroll: 1,
    draggable: false,
    // lazyLoad: 'ondemand',
    waitForAnimate: false,
    // nextArrow: '<i class="fa fa-angle-right"></i>',
    // prevArrow: '<i class="fa fa-angle-left"></i>',
    customPaging: function(slider, i) {
      var slide = $(slider.$slides[i]).find("img").attr('src') || $(slider.$slides[i]).find("img").attr('data-lazy') || $(slider.$slides[i]).find("img").attr('data-original');
      var div = slide.replace(/.{1,}\./, "");
      var thumb = slide.replace(/\..{1,}/, "");
      var inf = $(slider.$slides[i]).data("inf");
      if (!inf){
        inf = "Пример " + i;
      }
      return '<a class="picture"><img src="' + thumb + '-mini.'+ div +'"></a><a class="inf">'+ inf +'</a>';
    },

    responsive: [{
      breakpoint: 500,
      settings: {
        dots: false,
      }
    }]
  });

// end


// tabs to move slider equipment items
$(document).on("click", ".equipment .tabs .tab", function(e) {
  e.preventDefault();
  var target = $(e.target);
  target.closest(".tabs").find(".tab").removeClass("active");
  target.closest(".tab").addClass("active");
  var slideIndex = +target.closest(".tab").data("toslide") - 1;
  var slider = target.closest("section").find(".equip-slider");
  slider.slick("slickGoTo", slideIndex);
});

// end


});