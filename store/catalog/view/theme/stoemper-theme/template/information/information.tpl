<?php echo $header; ?>
<?php echo $column_left; ?>
<div class="row">
	<div class="col-md-12">
		<?php echo $content_top; ?>
	</div>
</div>
<div class="row">
  	<div class="breadcrumb">
    	<?php foreach ($breadcrumbs as $breadcrumb) { ?>
    		<?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    	<?php } ?>
  	</div>
</div>
<div class="row">
  	<div class="col-md-8">
		<h1><?php echo $heading_title; ?></h1>
		<?php echo $description; ?>	
		<?php echo $content_bottom; ?>
		<div class="buttons">
    		<div class="right">
    			<a href="<?php echo $continue; ?>" class="btn btn-primary btn-sm"><?php echo $button_continue; ?></a>
    		</div>
  		</div>
	</div>
	<div id="column-right" class="col-sm-12 col-md-4">
		<?php echo $column_right; ?>
	</div>
</div>
<?php echo $footer; ?>