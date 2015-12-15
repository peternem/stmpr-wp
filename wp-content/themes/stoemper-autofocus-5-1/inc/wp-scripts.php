<?php 

function sandbox_scripts() {
	// Add Font Awesome stylesheet
	 
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/bootstrap/css/bootstrap.css', array(), '20130908');
	wp_enqueue_style( 'customized-bootstrap', get_template_directory_uri().'/css/stoemper-bootstrap.css', array(), '20130908');
	wp_enqueue_style( 'font-awesome-icons', get_template_directory_uri().'/css/font-awesome.min.css', array(), '20130908' );
	wp_enqueue_script( 'upbootwp-jQuery', get_template_directory_uri().'/js/vendor/jquery.js',array(),'2.0.3',true);
	wp_enqueue_script( 'upbootwp-basefile', get_template_directory_uri().'/js/vendor/bootstrap.min.js',array(),'20130905',true);
	wp_enqueue_script( 'javascript', get_template_directory_uri().'/js/stoemper.js',array(),'20130905',true);

}
add_action( 'wp_enqueue_scripts', 'sandbox_scripts' );

?>