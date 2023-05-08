require(['jquery', 'jquery/ui'], function($) {
	$(document).ready(function() {
		$(".open-modal").click(function() {
		    $myModal.modal('openModal');
		});		
		// $(".modal-header").click(function(){
		//   	$(this).addClass("active");
		//   	console.log("hello");
		// });

		// if (document.cookie.includes("Vruti")) return;

		// $('body').addClass("show");
		//     $(".testing-modal").click(function () {
		//         $('body').removeClass("show");
		//         function setCookie(cname, cvalue, exMins) {
		//             var date = new Date();
		//             date.setTime(date.getTime() + (30 * 1000));
		//             var expires = "expires=" + date.toUTCString();
		//             document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		//             console.log(date);
		//         }
		//         setCookie('Vruti', '1', 0)

		//     });
	});

});   