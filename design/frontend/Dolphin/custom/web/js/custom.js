require(['jquery', 'jquery/ui', 'slick'], function($) {
	$(document).ready(function() {
	    $(".page-title-wrapper.product").click(function(){
			$(this).toggleClass('active1');
		});

		$(".tab-title").click(function(){
        $(".tab-title").removeClass("active");
        $(this).addClass("active");
    	});
	});	

});   