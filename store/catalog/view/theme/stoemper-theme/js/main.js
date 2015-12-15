$( document ).ready(function() {
	
	var url = window.location;
	var param = url.href
	   $('ul.nav.nav-pills a[href="' + this.param + '"]').parent().addClass('active');

	   $('ul.nav.nav-pills li a').filter(function() {
	      return this.href == param;
	   }).parent().addClass('active');
});

