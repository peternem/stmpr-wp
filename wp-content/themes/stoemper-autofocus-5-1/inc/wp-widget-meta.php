<?php 
// Widget: Meta; to match the Sandbox style and replace Widget plugin default
function widget_sandbox_meta($args) {
	extract ( $args );
	if (empty ( $title ))
		$title = __ ( 'Meta', 'sandbox' );
	?>
			<?php echo $before_widget; ?>
				<?php echo $before_title . $title . $after_title; ?>
<ul>
					<?php wp_register()?>
					<li><?php wp_loginout() ?></li>
					<?php wp_meta()?>
				</ul>
<?php echo $after_widget; ?>
<?php
}
?>