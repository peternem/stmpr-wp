// JavaScript Document
jQuery(document).ready(function() {

//$(document).ready( function() {
	// if (jQuery.browser.msie && parseInt(jQuery.browser.version) < 9){
		// jQuery('#page').css({'background-color':'#000000'});		
	// }


	
	// Preload all rollovers
	jQuery(".GodZillaPulse img").each(function() {
		// Set the original src
		rollsrc = jQuery(this).attr("src");
		rollON = rollsrc.replace(/.png$/ig,"_over.png");
		newImg = new Image(); // create new image obj
		jQuery(newImg).attr("src", rollON); // set new obj's src
	});

	
	// Navigation rollovers
	jQuery(".GodZillaPulse").mouseover(function(){
		imgsrc = jQuery(this).children("img").attr("src");
		
		if (typeof(imgsrc) != 'undefined') {
		imgsrcON = imgsrc.replace(/.png$/ig,"_over.png"); // strip off extension
		jQuery(this).children("img").attr("src", imgsrcON);
		}
		
		if (jQuery(this).children("img").attr("src", imgsrcON)) {
		imgsrcON = imgsrc.replace(/.png$/ig,"_over.png"); // strip off extension
		jQuery(this).children("img").attr("src", imgsrcON);
		}
		
	});
	
	// Handle mouseout
	jQuery(".GodZillaPulse").mouseout(function(){
		if (typeof(imgsrc) != 'undefined') {
			jQuery(this).children("img").attr("src", imgsrc);
		}
	});
});


/* ------------------------------- */
/*  Begin -- Email script - contact.php */
/* ------------------------------- */  

function emailContactInfo(){

	var email = "information";
	var emailHost = "stoemper.com";
	var errorMsg = "Email Error";
	var subject = "Stoemper.com - Contact Us and Sales Inquiries";
	var body_message = " ";
	
	var mailto_link = 'mailto:'+email+'@'+emailHost+'?subject='+subject+'&body='+body_message;
	
	var win = (parent.location= mailto_link);
}	
