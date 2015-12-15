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
		  <?php if ($returns) { ?>
		  <?php foreach ($returns as $return) { ?>
		  <div class="return-list">
		    <div class="return-id"><b><?php echo $text_return_id; ?></b> #<?php echo $return['return_id']; ?></div>
		    <div class="return-status"><b><?php echo $text_status; ?></b> <?php echo $return['status']; ?></div>
		    <div class="return-content">
		      <div><b><?php echo $text_date_added; ?></b> <?php echo $return['date_added']; ?><br />
		        <b><?php echo $text_order_id; ?></b> <?php echo $return['order_id']; ?></div>
		      <div><b><?php echo $text_customer; ?></b> <?php echo $return['name']; ?></div>
		      <div class="return-info"><a href="<?php echo $return['href']; ?>"><img src="catalog/view/theme/default/image/info.png" alt="<?php echo $button_view; ?>" title="<?php echo $button_view; ?>" /></a></div>
		    </div>
		  </div>
		  <?php } ?>
		  <div class="pagination"><?php echo $pagination; ?></div>
		  <?php } else { ?>
		  <div class="content"><?php echo $text_empty; ?></div>
		  <?php } ?>
		  <div class="buttons">
		    <div class="right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
		  </div>
  	</div>
  <?php echo $column_right; ?>
  <?php echo $content_bottom; ?>
</div>
<?php echo $footer; ?>