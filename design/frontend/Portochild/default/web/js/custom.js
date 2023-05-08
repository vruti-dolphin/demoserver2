require(['jquery', 'jquery/ui', 'slick'], function($) {
	$(document).ready(function() {
		$('.my-cart-link').click(function(e){
	        e.preventDefault();
	        $('.minicart-wrapper .action.showcart').click();
	    });
	});
	$(window).scroll(function(){
      if ($(this).scrollTop() > 140) {
         $('.nav-sections').addClass('sticky');
         $('body').addClass('header-sticky');
      }
      else {
         $('.nav-sections').removeClass('sticky');
         $('body').removeClass('header-sticky');
      }
	});
	$(".toggle-menu-close").click(function(){
      $('html').removeClass("nav-before-open nav-open");
    });	

});   