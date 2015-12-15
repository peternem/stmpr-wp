<?php echo $header; ?>
<?php echo $content_top; ?>
<div id="content2" class="row">
	<?php if(!$column_right) { ?>
		<div id="column-left" class="col-md-12">
	<?php } else { ?>
		<div id="column-left" class="col-md-8">
	<?php } ?>
	
		<h1><?php echo $heading_title; ?></h1>
		<?php echo $column_left; ?>
	</div>
	<?php echo $column_right; ?>
</div>
<?php echo $content_bottom; ?>	
<?php echo $footer; ?>