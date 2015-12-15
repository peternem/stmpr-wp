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
<div id="content" class="inner-container">
	<div class="row">
		<div class="col-md-12">
			<?php if (function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
		</div>
	</div>
	<?php while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>"<?php post_class('stoemp-pg-temp');?>>
		<header class="page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php
			if (function_exists('the_subtitle'))the_subtitle('<h2 class="subtitle">', '</h2>');?>
		</header>
		<section class="row entry-content">
			<div class="col-sm-12 col-md-12">
				<?php the_content();?>
			</div>
		</section>
		<div class="row bike-images">
			<div class="col-sm-8 col-md-8">
				<img src="/wp-content/uploads/2015/12/motfish-stoemper-darrell.jpg"  alt="The Stoemper Ronny" class="imageStyle img-responsive"/>
			</div>
		  	<div class="col-sm-4 col-md-4">
				<img src="/wp-content/uploads/2015/12/motofish-stoemper-darrell-drvtrn.jpg"  alt="The Stoemper Ronny" class="imageStyle top img-responsive"/>
				<img src="/wp-content/uploads/2015/12/motofish-stoemper-darrell-ht_I3_2352.jpg"  alt="The Stoemper Ronny" class="imageStyle bottom img-responsive"/>
			</div>
		</div>		
		<div class="row geo-section">
			<div class="col-md-12 text-center">
					<h3>ROAD BIKE GEOMETRY</h3>
			</div>
			<div class="col-md-12 geoChart">
					<?php include( get_template_directory() . '/inc/rd-xml-parse-script.php'); ?>
			</div>
		</div>
		<div class="row features">
			<div class="col-md-12 text-center">
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
		<div class="row bike-images">
			<div class="col-sm-6 col-md-6">
				<img class="imageStyle resp-top img-responsive" alt="The Stoemper Eddy" src="/wp-content/uploads/2015/12/motofish-stoemper-darrell-fork-ht-I3-2338.jpg">
			</div>
			<div class="col-sm-6 col-md-6">
				<img class="imageStyle img-responsive" alt="The Stoemper Eddy" src="/wp-content/uploads/2015/12/motofish-stoemper-darrell-stem-I3_2336.jpg">
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
		<?php edit_post_link(__('Edit', 'sandbox'),'<div class="row entry-meta text-center"><div class="col-md-12"><span class="btn btn-danger">','</span></div></div>') ?>
	</div><!-- .post -->
	<?php endwhile; // end of the loop. ?>
</div><!-- .content -->
<?php get_footer() ?>