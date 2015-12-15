<?php 
// Nice Tag Cloud
function widget_nice_tagcloud($args) {
	extract ( $args );
	?>
        <?php echo $before_widget; ?>
            <?php echo $before_title . 'Tag Cloud' . $after_title; ?>

<?php if ( function_exists('wp_tag_cloud') ) : ?>
<p>
						<?php wp_tag_cloud('orderby=count&order=DESC'); ?>
					</p>
<?php endif; ?>
				
        <?php echo $after_widget; ?>
<?php
}
wp_register_sidebar_widget( 'Nice Tag Cloud', 'widget_nice_tagcloud',null );
?>