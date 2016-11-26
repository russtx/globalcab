(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		$( "#accordion" ).accordion();
                 $("#accordion").accordion({ header: "h3", collapsible: true, active: false });
	});
	
})(jQuery, this);
