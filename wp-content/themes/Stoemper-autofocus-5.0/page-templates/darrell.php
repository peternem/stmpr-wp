<?php
/**
 * Template Name: Page - Darrell - The Bikes
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */
?>
<?php get_header(); ?>
<?php //wp_nav_menu()?>
	<div class="container bikes-bground">
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
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_670x445.jpg"  alt="The Stoemper Darrell" class="imageStyle img-responsive"/>
					</div>
				  	<div class="col-sm-12 col-md-4">
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_seattube_320x445.jpg"  alt="The Stoemper Darrell" class="imageStyle img-responsive"/>
					</div>
				</div>
				<div class="row slideshow">
					<div class="col-sm-12 col-md-4">
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_ht_320x445.jpg"  alt="The Stoemper Darrell" class="imageStyle img-responsive"/>
					</div>
					<div class="col-sm-12 col-md-8">
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_drivetrain_670x445.jpg" alt="The Stoemper Darrell" class="imageStyle img-responsive"/>
					</div>
				</div>				
				<div class="row">
					<div class="col-sm-12 col-md-12 geoChart">
							<h3>DARRELL ROAD BIKE GEOMETRY</h3>
							<?php include TEMPLATEPATH.'/inc/rd-xml-parse-script.php'; ?>
					</div>
				</div>	
				<div class="row features">
					<div class="col-md-4 col-md-offset-4">
						<h3>STANDARD FEATURES</h3>
						<ul class="list-group">
							<li class="list-group-item">All Stoemper ALU frames come with a tapered ENVE carbon fork, painted to match.</li>
							<li class="list-group-item">Choose braze-on or 31.8mm clamp type Front Derailleur. </li>
							<li class="list-group-item">Seat posts are always 27.2 mm </li>
							<li class="list-group-item">Default BB is PF30, please let us know if you need a standard BB</li>
							<li class="list-group-item">Tire clearance up to 27 mm no problem</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<img alt="The Stoemper Eddy" src="<?php bloginfo("template_url"); ?>/img/darrell/BS3-818x500.jpg" class="imageStyle img-responsive" />
					</div>
				</div>
				<div id="nav-above" class="row navigation">
					<div class="nav-previous col-xs-4 col-md-4"><a href="/index.php/the-bikes/taylor/">&laquo; TAYL&ouml;R</a></div>
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
			</div><!-- .post -->
		</div><!-- .content -->
	</div><!-- .container -->
	<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
<?php //get_sidebar() ?>
<?php get_footer() ?>