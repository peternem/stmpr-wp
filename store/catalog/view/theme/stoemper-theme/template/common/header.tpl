<!DOCTYPE html>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8" />
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1" name="viewport">
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/stoemper-theme/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/stoemper-theme/stylesheet/store-style.css" />
<!-- <link rel="stylesheet" type="text/css" href="catalog/view/theme/stoemper-theme/stylesheet/store-bootstrap.css" /> -->
<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/stoemper-theme/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />

<script type="text/javascript" src="catalog/view/theme/stoemper-theme/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/theme/stoemper-theme/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="catalog/view/theme/stoemper-theme/js/bootstrap.js"></script>
<script type="text/javascript" src="catalog/view/theme/stoemper-theme/js/main.js"></script>
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>
<!--[if IE 7]> 
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->
<?php if ($stores) { ?>
<script type="text/javascript"><!--
$(document).ready(function() {
<?php foreach ($stores as $store) { ?>
$('body').prepend('<iframe src="<?php echo $store; ?>" style="display: none;"></iframe>');
<?php } ?>
});
//--></script>
<?php } ?>
<?php echo $google_analytics; ?>
</head>
<body>
	<?php if ($categories) { ?>

	<div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- <div class="container">
			<div id="header" class="row">
			  	<div class="col-md-2">
			  		<?php echo $language; ?>
			  	</div>
			 </div>
		</div> -->
		<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle collapsed" data-target=".navbar-collapse" data-toggle="collapse" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://stoemper.com/" title="Stoemper.com">
				<img class="img-responsive" src="http://stoemper.com/store/catalog/view/theme/stoemper-theme/image/stoemper_tube_550x.svg" alt="Stoemper"/>
				<!-- <?php if ($logo) { ?>
				<div id="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
	  			<?php } ?> -->
			</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<!-- <li><a href="http://stoemper.com/store/index.php?route=common/home" title="Store">STORE</a></li> -->
				<!-- <li><a href="http://stoemper.com/media" title="Media">Web</a></li> -->
				<?php if ($categories) { ?>
	
					<li><a href="<?php echo $home; ?>"><?php echo $text_home; ?></a></li>
					<?php foreach ($categories as $category) { ?>
					<li><a href="<?php echo $category['href']; ?>#"><?php echo $category['name']; ?></a></li>
					<?php } ?>

				<?php } ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><?php if (!$logged) { ?>
								<?php echo $text_welcome; ?>
								<?php } else { ?>
								<?php echo $text_logged; ?>
								<?php } ?></li>
				<li><a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart .$cart ; ?></a></li>
				<li><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
			</ul>
			</div>
		</div>
	</div>
<?php } ?>


</div>
<?php if ($error) { ?>
<div class="container">
	<div class="row">
    	<div class="warning col-md-12"><?php echo $error ?><img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>
    </div>
</div>
<?php } ?>
<div id="container" class="container main_content">
	<div id="content" class="inner-container">
	<div class="row">
		<div id="notification" class="notify col-md-12"></div>
	</div>
	<?php if ($categories) { ?>
	<!-- <nav class="shop_menu">
		<div class="row">
			<div class="col-md-12 col-store-nav">
				<ul class="nav nav-pills shop-nav">
					<li><a href="<?php echo $home; ?>"><?php echo $text_home; ?></a></li>
					<?php foreach ($categories as $category) { ?>
					<li><a href="<?php echo $category['href']; ?>#"><?php echo $category['name']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	
	</nav> -->
	<?php } ?>