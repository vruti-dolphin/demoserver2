require(['jquery', 'jquery/ui', 'slick'], function($) {
	$(document).ready(function() {
		var modal = $('#modal_content').modal({...});
		modal.on('modalclosed', function () {
		    // Do some action when modal closed
		});
		
	});	
});   