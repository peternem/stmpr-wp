<?php
/**
 * Template Name: Page - Ronny - The Bikes
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

?>
<?php get_header(); ?>
<?php //wp_nav_menu()?>
	<div id="container" class="bikes-bground">
		<div id="content">
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?> stoemp-pg-temp">
				<div class="row">
					<div class="col-md-12">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php
						if (function_exists('the_subtitle'))the_subtitle('<h2 class="subtitle">', '</h2>');?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
					</div>
				</div>
				<div class="row entry-content bikes">
					<div class="col-md-12">
						<?php the_content() ?>
					</div>
				</div>
				<div class="row slideshow">
						<div class="col-sm-12 col-md-8">
							<img src="<?php bloginfo("template_url"); ?>/img/ronny/IMAG0838.jpg"  alt="The Stoemper Ronny" class="imageStyle img-responsive"/>
						</div>
					  	<div class="col-sm-12 col-md-4">
							<img src="<?php bloginfo("template_url"); ?>/img/ronny/_MG_5585.jpg"  alt="The Stoemper Ronny" class="imageStyle img-responsive"/>
							<img src="<?php bloginfo("template_url"); ?>/img/ronny/_MG_5593-2.jpg"  alt="The Stoemper Ronny" class="imageStyle img-responsive"/>
						</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12 geoChart">
							<h3>RONNY CYCLOCROSS BIKE GEOMETRY</h3>
							<?php include TEMPLATEPATH.'/inc/cx-xml-parse-script.php'; ?>
					</div>
				</div>
				<div class="row features">
					<div class="col-sm-12 col-md-6">
						<h3>STANDARD FEATURES</h3>
						<ul>
							<li class="list-group-item">1.125" ENVE carbon fork - Painted to match</li>
							<li class="list-group-item">27.2 mm seat post</li>
							<li class="list-group-item">Choose braze-on or 31.8mm clamp type Front Derailleur.</li>
							<li class="list-group-item">Standard threaded English BB</li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-6">
						<h3>CUSTOM OPTIONS</h3>
						<ul>
							<li class="list-group-item">Partial or full internal routing</li>
							<li class="list-group-item">Integrated seat post</li>
							<li class="list-group-item">Water bottle cage mounts</li>
							<li class="list-group-item">Disc brake or disc-canti combo</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<img class="imageStyle img-responsive" alt="The Stoemper Eddy" src="<?php bloginfo("template_url"); ?>/img/ronny/_MG_5517.jpg">
					</div>
				</div>
				<div id="nav-above" class="row navigation">
					<div class="nav-previous col-xs-4 col-md-4"><a href="/index.php/the-bikes/eddy/">&laquo; Eddy</a></div>
					<div class="nav-next col-xs-4 col-md-4"><a href="/index.php/the-bikes/">The Bikes &raquo;</a></div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>" . __('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
					</div>
				</div>
				<div class="row entry-meta">
					<div class="col-sm-12 col-md-12">
						<?php edit_post_link(__('Edit', 'sandbox'),'<span class="btn btn-danger">','</span>') ?>
					</div>
				</div>
			</div><!-- #post -->	
		</div><!-- #content -->
	</div><!-- #container -->
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
<?php get_footer() ?>