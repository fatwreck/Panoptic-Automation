$(document).ready(function (){  
  
    // EMAIL CLOAKING
    $(".emailCloak").each(function () {
      var ats, dots, address, i, foundDots;
      ats = [ ' at ', ' (at) ', ' [at] ' ];
      dots = [ ' dot ', ' (dot) ', ' [dot] ' ];
      address = $(this).html();
      for ( i = 0; i < ats.length; i++ ) {
          address = address.replace(ats[i], '@');
      }
      for ( i = 0; i < dots.length; i++ ) {
          foundDots = [];
          foundDots = address.split(dots[i]);
          for(var j=1; j<foundDots.length; j++) {
              address = address.replace(dots[i], '.');
          }
      }
      $(this).html('<a href="mailto:' + address + '">' + address + '</a>');
    });
    
    //ANIMATION
    $(window).on('DOMContentLoaded load resize scroll', function() {
    var winScrPos = $(window).scrollTop(),
        winHeight = $(window).height();
        $('.animateMeUp').each(function () {
            var itemHeight = $(this).height(),
                itemTop = $(this).offset().top,
                itemBot = itemTop + itemHeight;

            if (itemTop + 100 <= winScrPos + winHeight) {
                $(this).removeClass('animateMeUp').addClass('fadeInUp animated');
            } else {
                $(this).removeClass('fadeInUp animated').addClass('animateMeUp');
            };
        });
    });
    
    // SLICK SLIDER
    $('.slider-service').slick({
        autoplay: true,
        speed: 600,
        slidesToShow: 1,
        adaptiveHeight: true,
        infinite: true,
        
        prevArrow: $('#prev-services-home'),
        nextArrow: $('#next-services-home')
      });
    
    $('.slider-solutions').slick({
        autoplay: true,
        speed: 600,
        arrows: false,
        slidesToShow: 1,
        adaptiveHeight: true,
        pauseOnHover:true,
        infinite: true,
        prevArrow: $('#prev-solutions-home'),
        nextArrow: $('#next-solutions-home')
      });
    
    $('.slider-testimonials').slick({
        autoplay: true,
        speed: 600,
        arrows: false,
        slidesToShow: 1,
        adaptiveHeight: true,
        infinite: true,
        prevArrow: $('#prev-solutions-home'),
        nextArrow: $('#next-solutions-home')
      }); 
    
    
    // GET URL FOR HEADER IMAGE
//    switch (window.location.pathname) {
//    case '/our-services':
//        $('#bgImg').addClass('navigation-section service-bg');
//        break;
//    case '/our-solutions':
//        $('#bgImg').addClass('navigation-section solutions-bg');
//        break;
//    };
    
//    $(function() {
//      var loc = window.location.href; 
//      if(/our-services/.test(loc)) {
//        $('#bgImg').addClass('navigation-section service-bg');
//      }
//      if(/our-solutions/.test(loc)) {
//        $('#bgImg').addClass('navigation-section solutions-bg');
//      }
//    });   
    
    
    $(function() {
        if(window.location.href.indexOf("/our-services/") < 1) {
            $('#bgImg').addClass('navigation-section service-bg');
        }
    });
    
        

//     $(function() {
//         if (/our-services/.test(window.location.href)) {
//             $('#bgImg').addClass('navigation-section service-bg');
//         } 
//     });
        
//      var loc = window.location.indexOf; 
//      if(/our-services/.test(loc)) {
//        $('#bgImg').addClass('navigation-section service-bg');
//      }
//      if(/our-solutions/.test(loc)) {
//        $('#bgImg').addClass('');
//      }
//    });       
    
});