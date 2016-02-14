<?php
register_nav_menu ('responsive', 'Responsive Menu');
register_nav_menu ('primary', 'Primary Menu');
register_nav_menu ('secondary', 'Secondary Menu');
register_nav_menu ('footer', 'Footer Menu');
register_nav_menu ('media', 'Media Menu');
?>

<?php
// Local dev live relaod content
if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
  wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
  wp_enqueue_script('livereload');
}
require get_template_directory().'/inc/wp-svg-support.php';
require get_template_directory().'/inc/class-stoemper_walker_nav_menu.php';
require get_template_directory().'/inc/info-form.php';
require get_template_directory().'/inc/wp-scripts.php';
require get_template_directory().'/inc/wp-breadcrumb.php';
require get_template_directory().'/inc/wp-pings.php';
require get_template_directory().'/inc/wp-exif-data.php';
//require get_template_directory().'/inc/wp-body-class.php';

//require get_template_directory().'/inc/wp-post-class.php';
require get_template_directory().'/inc/wp-comment-class.php';
require get_template_directory().'/inc/wp-date-classes.php';

require get_template_directory().'/inc/wp-cats-meow.php';
require get_template_directory().'/inc/wp-tag-ur-it.php';
require get_template_directory().'/inc/wp-nice-tag-cloud.php';

require get_template_directory().'/inc/wp-widget-search.php';
require get_template_directory().'/inc/wp-widget-meta.php';
require get_template_directory().'/inc/wp-widget-rss-link.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/wp-custom-header.php';

// Widgets plugin: intializes the plugin after the widgets above have passed snuff
function sandbox_widgets_init() {
	if (! function_exists ( 'register_sidebars' ))
		return;
		
		// Uses H3-level headings with all widgets to match Sandbox style
	$p = array (
			'before_title' => "<h3 class='widgettitle'>",
			'after_title' => "</h3>\n" 
	);
	// Table for how many? Two? This way, please.
	register_sidebars ( 3, $p );
	// Finished intializing Widgets plugin, now let's load the Sandbox default widgets
	wp_register_sidebar_widget ( __ ( 'Search', 'sandbox' ), 'widget_sandbox_search', null, 'search' );
	wp_unregister_widget_control ( 'search' );
	wp_register_sidebar_widget ( __ ( 'Meta', 'sandbox' ), 'widget_sandbox_meta', null, 'meta' );
	wp_unregister_widget_control ( 'meta' );
	wp_register_sidebar_widget ( __ ( 'RSS Links', 'sandbox' ),'widgets' , 'widget_sandbox_rsslinks' );
	wp_register_widget_control (__ ( 'RSS Links', 'sandbox' ),'widgets' , 'widget_sandbox_rsslinks_control', 300, 90 );
}

// Translate, if applicable
load_theme_textdomain ( 'sandbox' );

// Runs our code at the end to check that everything needed has loaded
add_action ( 'init', 'sandbox_widgets_init' );

// Adds filters so that things run smoothly
add_filter ( 'archive_meta', 'wptexturize' );
add_filter ( 'archive_meta', 'convert_smilies' );
add_filter ( 'archive_meta', 'convert_chars' );
add_filter ( 'archive_meta', 'wpautop' );

// Remember: the Sandbox is for play.

// Thanks very much to Thin & Light (http://thinlight.org/) for this custom function!
function tl_excerpt($text, $excerpt_length = 25) {
	$text = str_replace ( ']]>', ']]&gt;', $text );
	$text = strip_tags ( $text );
	$text = preg_replace ( "/\[.*?]/", "", $text );
	$words = explode ( ' ', $text, $excerpt_length + 1 );
	if (count ( $words ) > $excerpt_length) {
		array_pop ( $words );
		array_push ( $words, '...' );
		$text = implode ( ' ', $words );
	}
	return apply_filters ( 'the_excerpt', $text );
}

function tl_post_excerpt($post) {
	$excerpt = ($post->post_excerpt == '') ? (tl_excerpt ( $post->post_content )) : (apply_filters ( 'the_excerpt', $post->post_excerpt ));
	return $excerpt;
}

require get_template_directory().'/inc/wp-next-prev-post.php';

// Much thanks goes out to Rob Bredow (http://www.185vfx.com) for this AWESOME plugin!
function remove_first_image($content) {
	if (! is_page () && ! is_feed () && ! is_feed ()) {
		$content = preg_replace ( '/^<p><img(.*?)>/i', "<p><!-- Image removed by Remove First Image Plugin -->", $content, 1 );
		$content = preg_replace ( '/^<img(.*?)>/i', "<!-- Image removed by Remove First Image Plugin -->", $content, 1 );
		$content = preg_replace ( '/^<p><a(.*?)><img(.*?)><\/a>/i', '<p><!-- Link and image removed by Remove First Image Plugin -->', $content );
		$content = preg_replace ( '/^<a(.*?)><img(.*?)><\/a>/i', '<p><!-- Link and image removed by Remove First Image Plugin -->', $content );
	}
	return $content;
}
add_filter ( 'the_content', 'remove_first_image' );

// Custom IE Style Sheet
function childtheme_iefix() {
	?>
<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/ie.css" />
<![endif]-->

<?php

}
add_action ( 'wp_head', 'childtheme_iefix' );

// Custom the_excerpt formatting / hides [caption] short codes
function the_autofocus_excerpt($text) { // Fakes an excerpt if needed
	global $post;
	if ('' == $text) {
		$text = get_the_content ( '' );
		$text = apply_filters ( 'the_content', $text );
		$text = str_replace ( ']]>', ']]&gt;', $text );
		$text = strip_tags ( $text, "<style>" );
		$text = preg_replace ( "/\[.*?]/", "", $text );
		$excerpt_length = 25;
		$words = explode ( ' ', $text, $excerpt_length + 1 );
		if (count ( $words ) > $excerpt_length) {
			array_pop ( $words );
			array_push ( $words, '&hellip;' );
			$text = implode ( ' ', $words );
		}
	}
	return $text;
}

remove_filter ( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter ( 'get_the_excerpt', 'the_autofocus_excerpt' );

require get_template_directory().'/inc/wp-post-img-url.php';
require get_template_directory().'/inc/wp-the-post-image-thumbnail.php';
require get_template_directory().'/inc/wp-img-setup.php';


/**
 * Enable support for Post Thumbnails on posts and pages
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails  optimum original image size 1280 x 853
 */
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );
add_theme_support( 'post-thumbnails' );

// add_image_size( 'careers-featured', 1920, 1080, true );
// add_image_size( 'careers-featured-narrow', 1920, 768, array( 'left', 'top' ) );
// add_image_size( 'people-featured-6x8', 600, 800, true );
add_image_size( 'media-featured', 1144, 763, array( 'center', 'top' )  ); // Hard crop left top
add_image_size( 'media-thumb-port', 720, 1080,  array( 'center', 'top' ));
add_image_size( 'media-thumb-land', 720, 480,  array( 'center', 'top' ));
// Post Attachment image function for Attachment Pages.
function the_attachment_image($size = large) {
	$attachmenturl = wp_get_attachment_url ( $image->ID );
	$attachmentimage = wp_get_attachment_image ( $image->ID, $size );
	
	echo '' . $attachmentimage . '';
}

// Post Attachment image function for Attachment Pages.
function link_to_attachment($size = large) {
	if ($attachs = get_children ( array (
			'post_parent' => get_the_ID (),
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image' 
	) )) {
		foreach ( $attachs as $attach ) {
			$attachmentlink = get_attachment_link ( $attach->ID );
			
			echo '<a href="' . $attachmentlink . '">View EXIF Data</a>';
		}
	}
}

// Removes 'p' tags from excerpts.
remove_filter ( 'the_excerpt', 'wpautop' );

require get_template_directory().'/inc/wp-next-prev-img-link.php';
require get_template_directory().'/inc/wp-adjacent-img-link.php';

// Overides default FULL size images size
$GLOBALS ['content_width'] = 800;

add_filter ( 'the_content_rss', 'do_shortcode' );

require get_template_directory().'/inc/wp-custom-comments.php';
require get_template_directory().'/inc/wp-custom-commenter-link.php';

?>