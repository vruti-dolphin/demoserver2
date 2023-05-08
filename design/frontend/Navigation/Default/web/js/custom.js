require(['jquery', 'jquery/ui', 'slick'], function($) {
	$(document).ready(function() {
	    $(".navigation .level0>.level1").click(function(){
			$(this).toggleClass('active');
		});	
	});	
});   

