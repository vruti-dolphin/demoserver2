require(['jquery', 'jquery/ui', 'slick'], function($) {
	$(document).ready(function() {
		$('.home_silder').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 1,	
		});
	});
});

