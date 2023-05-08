require(['jquery','Magento_Ui/js/modal/modal','mage/cookies'], function($,modal) {
	$(document).ready(function() {	

	    if (document.cookie.includes("Vruti")) return;
	    $('body').addClass("show");
	    $(".popup_box").click(function () {
	        $('body').removeClass("show");
	        function setCookie(cname, cvalue, exMins) {
	            var date = new Date();
	            date.setTime(date.getTime() + (30 * 1000));
	            var expires = "expires=" + date.toUTCString();
	            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	            console.log(date);
	        }
	        setCookie('Vruti', '1', 0);
	    });


	    // const cookieBox = document.querySelector(".cookies_wrapper"),
		//   buttons = document.querySelectorAll(".copy_buttons");

		// const executeCodes = () => {
		//   //if cookie contains codinglab it will be returned and below of this code will not run
		//   if (document.cookie.includes("codinglab")) return;
		//   cookieBox.classList.add("show");

		//   buttons.forEach((button) => {
		//     button.addEventListener("click", () => {
		//       cookieBox.classList.remove("show");

		//       //if button has acceptBtn id
		//       if (button.id == "acceptBtn") {
		//         //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
		//         document.cookie = "cookieBy= codinglab; max-age=" + 24 * 60 * 60 * 1000;
		//       }
		//     });
		//   });
		// };
		// window.addEventListener("load", executeCodes);
		// $(document).ready(executeCodes);


	});
});


