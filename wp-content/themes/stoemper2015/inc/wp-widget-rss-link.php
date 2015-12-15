<?php 
// Widget: RSS links; to match the Sandbox style
function widget_sandbox_rsslinks($args) {
	extract ( $args );
	$options = get_option ( 'widget_sandbox_rsslinks' );
	$title = empty ( $options ['title'] ) ? __ ( 'RSS Links', 'sandbox' ) : $options ['title'];
	?>
		<?php echo $before_widget; ?>
			<?php echo $before_title . $title . $after_title; ?>
<ul>
	<li><a href="<?php bloginfo('rss2_url') ?>"
		title="<?php echo esc_html(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>"
		rel="alternate" type="application/rss+xml"><?php _e('All posts', 'sandbox') ?></a></li>
	<li><a href="<?php bloginfo('comments_rss2_url') ?>"
		title="<?php echo esc_html(bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'sandbox'); ?>"
		rel="alternate" type="application/rss+xml"><?php _e('All comments', 'sandbox') ?></a></li>
</ul>
<?php echo $after_widget; ?>
<?php
}

// Widget: RSS links; element controls for customizing text within Widget plugin
function widget_sandbox_rsslinks_control() {
	$options = $newoptions = get_option ( 'widget_sandbox_rsslinks' );
	if ($_POST ["rsslinks-submit"]) {
		$newoptions ['title'] = strip_tags ( stripslashes ( $_POST ["rsslinks-title"] ) );
	}
	if ($options != $newoptions) {
		$options = $newoptions;
		update_option ( 'widget_sandbox_rsslinks', $options );
	}
	$title = htmlspecialchars ( $options ['title'], ENT_QUOTES );
	?>
<p>
	<label for="rsslinks-title"><?php _e('Title:'); ?> <input
		style="width: 250px;" id="rsslinks-title" name="rsslinks-title"
		type="text" value="<?php echo $title; ?>" /></label>
</p>
<input type="hidden" id="rsslinks-submit" name="rsslinks-submit"
	value="1" />
<?php
}
?>