// JavaScript Document

jQuery(document).ready(function() {

jQuery.ajax({
type: "GET",
url: "./xml/cx-geometery.xml",
dataType: "xml",
success: parseXml
});

function parseXml(xml) {
	
	jQuery(xml).find("cx_geo").each(function() {
		//Loops through each state & find's respective instance of city & id in the xml file
		
		jQuery("#Citylist, #Citylist1").append('<tr class="alternate">'+
			'<td>'+ jQuery(this).find("Size").text() +'</td>' +
			'<td>'+ jQuery(this).find("ETT").text()+'</td>' +
			'<td>'+ jQuery(this).find("STC2C").text()+'</td>' +
			'<td>'+ jQuery(this).find("HT").text()+'</td>' +
			'<td>'+ jQuery(this).find("HTAngle").text()+'</td>' +
			'<td>'+ jQuery(this).find("STAngle").text()+'</td>' +
			'<td>'+ jQuery(this).find("CSLength").text()+'</td>' +
			'<td>'+ jQuery(this).find("BBDrop").text()+'</td>');
			});
	}
});
