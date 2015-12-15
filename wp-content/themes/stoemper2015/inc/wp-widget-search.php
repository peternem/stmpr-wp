<?php
// Widget: Search; to match the Sandbox style and replace Widget plugin default
function widget_sandbox_search($args) {
	extract ( $args );
	if (empty ( $title ))
		$title = __ ( 'Search', 'sandbox' );
	?>
			<?php echo $before_widget?>
				<?php echo $before_title ?><label for="s"><?php echo $title ?></label><?php echo $after_title?>
<form class="form-inline" id="searchform" method="get" role="form"
	action="<?php echo esc_url( home_url() ); ?>">
	<div class="archive form-group">
		<input class="form-control" id="s" name="s" type="text"
			value="<?php echo esc_html(stripslashes($_GET['s']), true) ?>"
			tabindex="1" /> <input class="btn btn-default" id="searchsubmit"
			name="searchsubmit" type="submit"
			value="<?php _e('Search', 'sandbox') ?>" tabindex="2" />
	</div>
</form>
<?php echo $after_widget?>

<?php
}
?>