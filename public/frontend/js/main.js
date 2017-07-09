//Isotope active js code:
//************************

// Active isotope with jQuery code:

// $('.main-iso').isotope({
	// itemSelector: '.item',
	// layoutMode: 'fitRows'
// });
// // Isotope click function
// $('.iso-nav ul li').click(function(){
	// $('.iso-nav ul li').removeClass('iso_active');
	// $(this).addClass('iso_active');

	// var selector = $(this).attr('data-filter');
	// $('.main-iso').isotope({
		// filter: selector
	// });
	// return false;
// });


$(document).ready(function(){
     var owl = $("#slider-carousel");
     owl.owlCarousel({
       items: 3,
       itemsDesktop: [1000, 3],
       itemsDesktopSmall: [900, 2],
       itemsTablet: [600, 1],
       itemsMobile: false,
      dots:false,
	 nav:true,
      navText: [

       "<img class='wow slideInLeft' src='images/left.png' title='Next' width='25' height='25'/>",
      "<img class='wow slideInRight' src='images/right.png' title='Next' width='25' height='25'/>"
      ],
     });
	
  $(".owl-carousel").owlCarousel({
	  
	items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayHoverPause:true,
	dots:false,
	 nav:true,
      navText: [

       "<img class='wow slideInLeft' src='img/a.png' title='Next' width='25' height='25'/>",
      "<img class='wow slideInRight' src='img/a.png' title='Next' width='25' height='25'/>"
      ],
	  
  });
  
  //wowo.js
  new WOW().init();
});