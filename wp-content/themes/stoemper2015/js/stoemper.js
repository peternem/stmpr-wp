// JavaScript Document
jQuery(document).ready(function() {
	var myWindow = jQuery(window).innerHeight();

	jQuery(function(){
		jQuery('.index-bground').css({ height: myWindow });
		jQuery(window).resize(function(){
			myWindow = jQuery(window).innerHeight();
			jQuery('.index-bground').css({ height: myWindow });
		});
	});
	
	
	function wpex_staticheader() {
		var header_height = jQuery('.navbar').outerHeight();
		jQuery('#page').css({
			paddingTop: header_height
		});	
		
		if (jQuery('#wpadminbar').length) {
			var admin_height = jQuery('#wpadminbar').outerHeight();
			jQuery('.navbar-fixed-top').css({
				position: 'fixed',
				top: admin_height
			});
	
		}
	}
	
	wpex_staticheader();
	
	jQuery(window).resize(function () {
		wpex_staticheader();
	});

	jQuery(window).bind('orientationchange', function(event) {
		
		var header_height = jQuery('.navbar').outerHeight();
		
		jQuery('#page').css({
			paddingTop: header_height
		});
		
		if (jQuery('#wpadminbar').length) {
			var admin_height = jQuery('#wpadminbar').outerHeight();
			jQuery('.navbar-fixed-top').css({
				position: 'fixed',
				top: admin_height
			});
	
		}
	});
});

