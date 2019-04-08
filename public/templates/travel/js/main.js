// Enable Strict Mode for All code for future errors in Pragma

"use strict";

    //Initiate Polyfill For Internet Explorer 11 object-fit:cover replacement

$(function(){
    if (document.documentMode || /Edge/.test(navigator.userAgent)){
        $(function () { objectFitImages() });
    }
  });

//Make Navbar change color 
$(window).scroll(function() {
    /* affix after scrolling 100px */
    if ($(document).scrollTop() > 100) {
        $('.navbar').addClass('affix');
    } else {
        $('.navbar').removeClass('affix');
    }
    });

      
// Smooth scroll speed configuration

var scroll = new SmoothScroll('a.smooth-scroll', {
    // Selectors
    ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
    header: null, // Selector for fixed headers (must be a valid CSS selector)

    // Speed & Easing
    speed: 700, // Integer. How fast to complete the scroll in milliseconds
    offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
    easing: 'easeInOutCubic', // Easing pattern to use
    customEasing: function (time) {

    // Function. Custom easing pattern
    // If this is set to anything other than null, will override the easing option above

    // return <your formulate with time as a multiplier>

    // Example: easeInOut Quad
    return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

},

// Callback API
before: function (anchor, toggle) {}, // Callback to run before scroll
after: function (anchor, toggle) {} // Callback to run after scroll
});

//Delete hashes in the url caused by smoothscoll
$(window).on('hashchange', function(e){history.replaceState ("", document.title, e.originalEvent.oldURL);});




//Slide navbar toggle
$(function(){
    // mobile menu slide from the left
    $('[data-toggle="collapse"]').on('click', function() {
        var $navMenuCont = $($(this).data('target'));
        $navMenuCont.animate({'width':'toggle'}, 280);
    });
})


//Blur the navbar background when navbar is opened
//Cancelled because of performance issues. Feel free to activate it at your own risk

/*$(function() {
    $('#navbarSupportedContent').on("show.bs.collapse", function() {
    $("body").addClass("blur-body")
    }).on("hide.bs.collapse", function() {
    $("body").removeClass("blur-body");
    });
})   */ 


//Sidebar Menu only on large devices and Up

$(function(){
      //effect to close submenu
    $('#slide-submenu').on('click',function() {			        
          $(this).closest('.list-group').animate({'width':'toggle',}),function(){
            $('.list-group').animate({'width':'toggle'});	
          };
          
        });
   //effect to open submenu
    $('.mini-submenu').on('click',function(){		
          $(this).next('.list-group').animate({'width':'toggle'});
    })
})


  //Initiate Pop Up

$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
});

//  Pop up Gallery initiate
$(document).ready(function() {

	$('a.btn-gallery').on('click', function(event) {
		event.preventDefault();
		
		var gallery = $(this).attr('href');
    
		$(gallery).magnificPopup({
      delegate: 'a',
            type:'image',
            mainClass: 'mfp-with-zoom mfp-img-mobile', 
        
			gallery: {
				enabled: true
            }
           
		}).magnificPopup('open');
	});
	
});

//Open inline element in pop up
$(document).ready(function() {
    $('.open-popup-link').magnificPopup({
      type: 'inline',
      midClick: true 
    });
});

//Open inline element in pop up
$(document).ready(function() {
    $('.open-popup-link2').magnificPopup({
      type: 'inline',
      midClick: true 
    });
});
  
//Open a pop up with a  single Image

$(document).ready(function() {
    $('div.album').magnificPopup({delegate: 'a', type: 'image' });
});

//Bootstrap Carousel
$(document).ready(function () {
    var carouselContainer = $('.carousel');
    var slideInterval = 4000;

    function toggleH() {
        $('.toggleCaption').hide()
        var caption = carouselContainer.find('.active').find('.toggleCaption').addClass('animated fadeInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',

        function () {
            $(this).removeClass('animated fadeInRight')
        });
        caption.slideToggle();
    }

    function toggleC() {
        $('.toggleButton').hide()
        var button = carouselContainer.find('.active').find('.toggleButton').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',

        function () {
            $(this).removeClass('animated fadeInUp')
        });
        button.slideToggle();
    }
    carouselContainer.carousel({
        interval: slideInterval,
        cycle: true,
        pause: "hover"
    })
        .on('slide.bs.carousel slid.bs.carousel', toggleH).trigger('slide.bs.carousel')
        .on('slide.bs.carousel slid.bs.carousel', toggleC).trigger('slide.bs.carousel');
});


//Run datepicker
$(function(){
    if($('body').hasClass('datepicker')){
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    }
});

// Run Jquery Touch
$(function(){
    if($('body').hasClass('jquerytouch')){

        $('#widget').draggable();
        
    }
});


var imported = document.createElement('script');
imported.src = 'https://www.googletagmanager.com/gtag/js?id=UA-124627520-1';
document.head.appendChild(imported);


window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-124627520-1');

