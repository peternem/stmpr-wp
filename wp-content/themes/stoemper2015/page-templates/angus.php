<?php
/**
 * Template Name: Page - Angus - The Bikes
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
	<article id="post-<?php the_ID(); ?>" <?php post_class('stoemp-pg-temp');?>>
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
				<img src="/wp-content/uploads/2015/12/stoemper-angus-740x.jpg" alt="The Stoemper Angus" class="imageStyle img-responsive"/>
			</div>
		  	<div class="col-sm-4 col-md-4">
				<img src="/wp-content/uploads/2015/12/stoemper-angus-chain-stays-IMG_2486.jpg" alt="The Stoemper Angus"  class="imageStyle top img-responsive"/>
				<img src="/wp-content/uploads/2015/12/stoemper-angus-seat-tune-IMG_25232.jpg" alt="The Stoemper Angus"  class="imageStyle bottom img-responsive"/>
			</div>
		</div>				
		<div class="row bike-images">
			<div class="col-sm-6 col-md-6">
				<img class="imageStyle resp-top img-responsive" alt="The Stoemper Angus" src="/wp-content/uploads/2015/12/stoemper_angus_six_day_670.jpg">
			</div>
			<div class="col-sm-6 col-md-6">
				<img class="imageStyle img-responsive" alt="The Stoemper Angus" src="/wp-content/uploads/2015/12/Angus_Guy_East_warmup_670.jpg">
			</div>
		</div>
		<div id="nav-above" class="row navigation">
			<div class="nav-previous col-xs-4 col-md-4"><a href="/the-bikes/ronny/">&laquo; Ronny</a></div>
			<div class="nav-next col-xs-4 col-md-4"><a href="/the-bikes/">The Bikes &raquo;</a></div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>" . __('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
			</div>
		</div>
		<?php edit_post_link(__('Edit', 'sandbox'),'<div class="row entry-meta text-center"><div class="col-md-12"><span class="btn btn-danger">','</span></div></div>') ?>
	</article><!-- #post -->
	<?php endwhile; // end of the loop. ?>	
</div><!-- .content -->
<?php get_footer() ?>