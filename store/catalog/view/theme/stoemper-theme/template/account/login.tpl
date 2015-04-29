<?php echo $header; ?>
<?php if ($success) { ?>
<div class="success"><?php echo $success; ?></div>
<?php } ?>
<?php if ($error_warning) { ?>
<div class="warning"><?php echo $error_warning; ?></div>
<?php } ?>
<!-- <div id="content" class="col-md-12"> --><?php echo $content_top; ?>
	<div class="row">
		<div class="breadcrumb col-sm-12 col-md-12">
			<?php foreach ($breadcrumbs as $breadcrumb) { ?>
			<?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
			<?php } ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h1><?php echo $heading_title; ?></h1>
		</div>
	</div>
	<div class="row">
		<?php echo $column_left; ?>
		<div class="login-content col-sm-12 col-md-4">
		    <h2><?php echo $text_new_customer; ?></h2>
			<div class="content">
				<p><b><?php echo $text_register; ?></b></p>
				<p><?php echo $text_register_account; ?></p>
				<a href="<?php echo $register; ?>" class="btn btn-primary btn-sm"><?php echo $button_continue; ?></a>
			</div>
		</div>
		<div class="login-content col-sm-12 col-md-4">
			<h2><?php echo $text_returning_customer; ?></h2>
			<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
				<div class="content">
					<p><?php echo $text_i_am_returning_customer; ?></p>
					<p><b><?php echo $entry_email; ?></b><br />
					<input type="text" class="form-control" placeholder="Enter email" name="email" value="<?php echo $email; ?>" /></p>
			  		<p><b><?php echo $entry_password; ?></b>
			  			<br/>
			  		<input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $password; ?>" /></p>
			  		<p><a href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a></p>
			  		
			  		<input type="submit" value="<?php echo $button_login; ?>" class="btn btn-primary btn-sm" />
					<?php if ($redirect) { ?>
			  			<input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
			  		<?php } ?>
				</div>
		  	</form>
		</div>
		<div id="column-right" class="col-sm-12 col-md-4"><?php echo $column_right; ?></div>
	</div>
  
    
  <!-- </div> -->
  <?php echo $content_bottom; ?></div>
<script type="text/javascript"><!--
$('#login input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#login').submit();
	}
});
//--></script> 
<?php echo $footer; ?>