<?php echo $header; ?>
<div class="breadcrumb">
	<?php foreach ($breadcrumbs as $breadcrumb) { ?>
		<?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
	<?php } ?>
</div>
<div id="content" class="row">

	<?php echo $content_top; ?>
	<?php echo $column_left; ?>
	<div class="col-md-8">
  		<h1><?php echo $heading_title; ?></h1>
  		<?php echo $text_message; ?>
		<div class="buttons">
			<div class="right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
	  	</div>
  	</div>
  	<?php echo $column_right; ?>
	<?php echo $content_bottom; ?>
</div>
<?php echo $footer; ?>