// import("../libs/jquery/dist/jquery.min.js");
// import("../libs/slick/slick.min.js");
// notimport("../libs/niceSelect/jquery.nice-select.min.js");
// notimport("../libs/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js");
// import("../libs/waypoint/jquery.waypoints.min.js");
// import("../libs/masked-input.min.js");
// notimport("../libs/circlefull.min.js");
// import("../libs/scrollToId/jquery.malihu.PageScroll2id.js");
// import("../libs/magnific-popup/js/jquery.magnific-popup.min.js");
// notimport("../libs/validate/jquery.validate.js");
// notimport("../libs/countdown/jquery.countdown.min.js");
// import("../libs/clipboard.min.js");
// import("../libs/matchHeight.js");

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

// dynamic popup btn
$(".equip-popup").on("mousedown", function(){
  var $this = $(this),
      popup = $("#equip-popup");
      slide = $this.closest(".slide");
      text = slide.find(".equip-inf h3").text();
      img = slide.find(".preview .equip-unit-slider a").eq(0).find("img").attr("src");
  // console.log(text, img)
  popup.find(".wrap-equip h3").text(text);
  popup.find(".wrap-equip img").attr("src", img);

});

// end





// slide toogle details equip
  $(".show-details").on("click", function(e){
    e.preventDefault();
    var $this = $(this);
    var angle = $this.find(".angle");
    if(angle.hasClass("angle-down")){
      angle.removeClass("angle-down").addClass("angle-up");
    }else{
      angle.removeClass("angle-up").addClass("angle-down");
    }
    $this.next().slideToggle();
  });
// end


// email to buffer
var clipboard = new Clipboard('header .email');
  // После того как происходит загрузка флеш файла
    clipboard.on("success", function(client, args) {
      console.log(1);
      $("header .cb-message").animate({
        opacity : 1
      }, 100, function(){
        setTimeout(function(){
            $("header .cb-message").animate({
            opacity : 0
          }, 1000);
        },1000);

      });
    });
    clipboard.on('error', function(e) {
      console.error('Не удалось скопировать email');
  });
// end

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

// popup with form
$('.popup-with-form, .equip-popup').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#name',
    // modal: true,
      // When elemened is focused, some mobile browsers in some cases zoom in
      // It looks not nice, so we disable it:
      callbacks: {
        beforeOpen: function() {
          if($(window).width() < 700) {
            this.st.focus = false;
          } else {
            this.st.focus = '#name';
          }
        }
      }
    });
// end


// scroll-to-id
$("a.to-id").mPageScroll2id({
    offset: 0,
    scrollEasing: "easeInOutQuint",
    pageEndSmoothScroll: true,
    highlightClass: "highlighted",
  });
//end



// gallery license
$(".certificate .gallery").magnificPopup({
  type: 'image',
  delegate: 'a',
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
        duration: 300,
         // don't foget to change the duration also in CSS
      }
    });
// end

// toutube popup
  $('.popup-youtube').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });
// end


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
    adaptiveHeight: true,
    //  responsive: [{
    //   breakpoint: 500,
    //   settings: {
    //     adaptiveHeight: true,
    //   }
    // }]
  }).on({
  beforeChange: function(event, slick, currentSlide, nextSlide) {
    var tab = $(".equipment .tabs .tab");
    var spSlide = $(".sp-slider .sp-slide");
    spSlide.addClass("hidden");
    spSlide.each(function(i){
      if(+$(this).data("toslide") - 1 === nextSlide){
        $(this).removeClass("hidden");
      }
    });

    tab.removeClass("active");

    tab.each(function(i){
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
        // dots: false,
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



// example works slider
$(".example-works .works-slider").slick({
    arrows: true,
    infinite: true,
    swipe: false,
    nextArrow: '<i class="fa fa-angle-right"></i>',
    prevArrow: '<i class="fa fa-angle-left"></i>',
    waitForAnimate: false,
  });
// end

// brand slider
$(".statistic .slider-brand").slick({
    arrows: true,
    // dragable: true,
    infinite: true,
    // swipe: false,
    nextArrow: '<i class="fa fa-angle-right"></i>',
    prevArrow: '<i class="fa fa-angle-left"></i>',
    waitForAnimate: false,
  });
// end

// brand slider
$(".our-team .team-slider").slick({
    arrows: true,
    // dragable: true,
    infinite: true,
    dots: true,
    // swipe: false,
    nextArrow: '<i class="fa fa-angle-right"></i>',
    prevArrow: '<i class="fa fa-angle-left"></i>',
    waitForAnimate: false,
    customPaging: function(slider, i) {
      var slide = $(slider.$slides[i]).find("img").attr('src');
      var div = slide.replace(/.{1,}\./, "");
      var thumb = slide.replace(/\..{1,}/, "");
      return '<a class="picture"><img src="' + thumb +'.'+ div +'"></a>';
    },
  });
// end


// FORM SUBMIT

    $('form').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var data = {};
        form.find("input").each(function() {
                if ($(this).val() == "") {
                    return false;
                }
            })

            form.find('input').not('input[type=checkbox]').each(function() {
                var $el = $(this);
                var key = $el.attr('name');
                if (key) {
                    data[key] = $el.val();
                }
            });
            form.find('input[type=checkbox]').each(function() {
                if ($(this).prop("checked")) {
                    var key = $(this).attr('name');
                    if (!data[key]) {
                        data[key] = [];
                    }
                    if (key && $(this).val()) {
                        data[key].push($(this).val());
                    }
                }
            });
            var yaCounter = new Ya.Metrika();
            var yaCounterVal = yaCounter.getClientID();
            data['ClientidYM'] = yaCounterVal;
            var formURL = 'integration_vtiger/post.php';
            formURL = formURL.replace('//', '/');


            $.post(formURL, data).done(function(done) {
                    form.find('input').not('input[type=hidden], input[type=checkbox]').each(function() {
                        $(this).val('');
                        valid = false;
                    });
                    if (form.hasClass("pop-up")) {
                        form.addClass("answer");
                        form.find("h2").css("display", "none");
                        form.find("fieldset").css("display", "none");
                        form.find(".success").removeClass("hidden-s");
                        setTimeout(function() {
                            $(".mfp-close").trigger("click");
                        }, 5000)
                    } else {
                        form.find(".success").removeClass("hidden-s");
                        setTimeout(function() {
                            form.find(".success").addClass("hidden-s");
                        }, 5000)
                    }
                })
                .fail(function() {
                    alert('not good');
                });
            return false;
    });

// end


// mathcHeight
$("li .picture").matchHeight({ property: 'min-height' });
// end


});