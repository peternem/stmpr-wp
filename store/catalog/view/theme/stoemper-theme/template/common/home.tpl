<?php echo $header; ?>

<div id="content" class="row">
	<div class="col-md-12">
		<?php echo $content_top; ?>
	</div>
</div>
<div id="content2" class="row">
	<?php echo $column_left; ?>
	<div class="col-md-8">
		<h1><?php echo $heading_title; ?></h1>
		<?php echo $content_bottom; ?>	
	</div>
	<div id="column-right" class="col-sm-12 col-md-4">
		<?php echo $column_right; ?>
	</div>
</div>

<?php echo $footer; ?>