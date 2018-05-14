

	//fixed navigation menu
	$(document).ready(function() {
		var navbar = $(".skin-blue .main-header nav");
		
		$('.box').mouseover(function() {
			//$('.phone-map').css('background-image', 'url("assets/smartmapMobile/smartmapMobile_2.png")');
			// alert(navbar.attr('class'));
			navbar.addClass("nav-fixed");
		})
		
		// $(window).scroll(function() {    
			// var scroll = $(window).scrollTop();
		
			// if (scroll >= 50) {
				// navbar.addClass("nav-fixed");
				// //$('#logo').height(30);
				// alert(navbar);
			// } else {
				// navbar.removeClass("nav-fixed");
				// //$('#logo').height('auto');
			// }
				
		// });
	// });
	
	  
});