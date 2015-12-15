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
		  <p><?php echo $text_total; ?><b> <?php echo $total; ?></b>.</p>
		  <table class="list">
		    <thead>
		      <tr>
		        <td class="left"><?php echo $column_date_added; ?></td>
		        <td class="left"><?php echo $column_description; ?></td>
		        <td class="right"><?php echo $column_amount; ?></td>
		      </tr>
		    </thead>
		    <tbody>
		      <?php if ($transactions) { ?>
		      <?php foreach ($transactions  as $transaction) { ?>
		      <tr>
		        <td class="left"><?php echo $transaction['date_added']; ?></td>
		        <td class="left"><?php echo $transaction['description']; ?></td>
		        <td class="right"><?php echo $transaction['amount']; ?></td>
		      </tr>
		      <?php } ?>
		      <?php } else { ?>
		      <tr>
		        <td class="center" colspan="5"><?php echo $text_empty; ?></td>
		      </tr>
		      <?php } ?>
		    </tbody>
		  </table>
		  <div class="pagination"><?php echo $pagination; ?></div>
		  <div class="buttons">
		    <div class="right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
		  </div>
	</div>	
	<?php echo $column_right; ?>
  	<?php echo $content_bottom; ?>
</div>
<?php echo $footer; ?>