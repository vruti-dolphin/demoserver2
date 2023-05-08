require(['jquery', 'jquery/ui', 'slick'], function($) {
	$(document).ready(function() {
	    $(".icon-search span").click(function(){
			$(".block-search").toggleClass('active');
		});
	    $(".tab-title").click(function(){
	        $(".tab-title").removeClass("active");
	        $(this).addClass("active");
	    });
	    $(".product-section-title").click(function(){
	        $(".product-section-title").removeClass("active");
	        $(this).addClass("active");
	    });

		$('.block.related ol.product-items, .block.upsell ol.product-items, .block.crosssell ol.product-items').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 1,	
		});

		$('.product-slider').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 1,	
		});

		$(".open-modal").click(function() {
		    $myModal.modal('openModal');
		});		

		// $('a[href^="#"]').on('click',function (e) {
		//     // e.preventDefault();
		//     var target = this.hash;
		//     var $target = $(target);
		//     $('html, body').stop().animate({
		//         'scrollTop': $target.offset().top
		//     }, 1000, 'swing', function () {
		//         // window.location.hash = target;
		//     });
		// });
	});

	// navbar sticky and smooth scrolling on click and animation on scroll

	$(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
          $('.nav_section').addClass('fixed');
           // $('.page-wrapper').addClass('active');
      } else {
          $('.nav_section').removeClass('fixed');
      }
	});

	$('a.nav-link').click(function(){
	    var topscroll = $($(this).attr('data-id')).offset().top
        console.log(topscroll);
      $('html, body').animate({scrollTop: topscroll - 150}, 900);
      return false;
	});

	$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();
		$('.testing').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
					$('.nav-item.active').removeClass('active');
					$('.nav-item').eq(i).addClass('active');
				}
		});
	}).scroll();

	
});

