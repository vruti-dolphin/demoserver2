require(['jquery', 'jquery/ui', 'slick'], function($) {
	$(document).ready(function() {
		$(".block-search").click(function(){
		  	$(this).toggleClass("active");
		});
	});
	$(window).scroll(function(){
      if ($(this).scrollTop() > 50) {
         $('.header.content').addClass('sticky');
         $('.page-header').addClass('sticky');
      }
      else {
         $('.header.content').removeClass('sticky');
         $('.page-header').removeClass('sticky');
      }
	});	

});   