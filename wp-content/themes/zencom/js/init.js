// PREPROS INCLUDE ---------------------------------------------------------

//@prepros-prepend vendor/picturefill.min.js
//@prepros-prepend vendor/jquery.hoverIntent.minified.js
//@prepros-prepend vendor/owl-carousel/owl.carousel.js
//@prepros-prepend functions.js

// VARIABLES  ---------------------------------------------------------

var res_x = jQuery(window).width();
var res_y = jQuery(window).height();
var breakpoints = Array(320,480,640,768,1024,1200); //breakpoint per imageBreakpointSwitch()
var mob_to_desk = 768;                              //soglia per il menu mobile

// ON DOCUMENT READY  ---------------------------------------------------------

jQuery(function(){
	checkMenu();
	toTop();
    jQuery('#main-slider').owlCarousel({
        navigation: true,
		pagination: true,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true
    });
    console.log('ready');
});

// ON DOCUMENT READY + LOADED IMAGES  ---------------------------------------------------------

jQuery(window).on("load", function() {
    console.log('loaded');
});

// OTHER LISTENERS  ---------------------------------------------------------

//reload pagina al cambio orientamento device
if (window.DeviceOrientationEvent) {
    window.addEventListener("orientationchange", function(){
        location.reload();
	});
}
