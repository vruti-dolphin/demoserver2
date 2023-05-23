require(['jquery', 'jquery/ui', 'slick'], function($) {
	$(document).ready(function() {
	    $("p.share").click(function(){
			$(".social_main").toggleClass('active');
		});
	});	 
});   