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
  		<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" role="form">
    		<h2><?php echo $text_password; ?></h2>
    		<div class="content">
    			<div class="form-group">
    				<label for="exampleInputEmail1"><?php echo $entry_password; ?></label><span class="required">*</span>
    				<input type="password" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Password"/>
            		<?php if ($error_password) { ?>
            		<span class="error"><?php echo $error_password; ?></span>
            		<?php } ?>
  				</div>
  				<div class="form-group">
    				<label for="exampleInputPassword1"><?php echo $entry_confirm; ?></label><span class="required">*</span>
    				<input type="password"  name="confirm" class="form-control" id="exampleInputPassword1" placeholder="Password Confirm">
  					<?php if ($error_confirm) { ?>
            		<span class="error"><?php echo $error_confirm; ?></span>
            		<?php } ?></td>
  				</div>
    		</div>
    		<div class="buttons">
      			<div class="left"><a href="<?php echo $back; ?>" class="btn btn-default"><?php echo $button_back; ?></a></div>
      			<div class="right"><input type="submit" value="<?php echo $button_continue; ?>" class="btn btn-primary" /></div>
    		</div>
 	 	</form>
  	</div>
  	<?php echo $column_right; ?>
  	<?php echo $content_bottom; ?>
</div>
<?php echo $footer; ?>