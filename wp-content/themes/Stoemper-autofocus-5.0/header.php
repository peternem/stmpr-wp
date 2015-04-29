<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> -->
<title><?php bloginfo('name'); if ( is_404() ) : _e(' &raquo; ', 'sandbox'); _e('Not Found', 'sandbox'); elseif ( is_home() ) : _e(' &raquo; ', 'sandbox'); bloginfo('description'); else : wp_title(); endif; ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="description" content="<?php bloginfo('description') ?>" />

<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'sandbox'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-144-precomposed.png"/>
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-114-precomposed.png"/>
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-72-precomposed.png"/>
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/ico/pple-touch-icon-57-precomposed.png"/>
<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head() ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/stoemper-bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/non-responsive.css" />

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/stoemper.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/bootstrap.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="<?php sandbox_body_class(); ?>">
	<header class="container">
		<div class="header_bg">
			<?php include 'inc/sitewide-stoemperZilla-wp.php'; ?>
		</div>
	</header>
	<nav class="container">
		<div class="navbar">
			<?php //include 'inc/wp-global-mainNav-menu.php.'; ?>
			<?php wp_nav_menu(array('container_class' => 'navLeft','theme_location' => 'primary'));?>
			<?php wp_nav_menu( array('container_class' => 'navRight','theme_location' => 'secondary') ); ?>
		</div>
	</nav>
	<div class="container hfeed">		