<?php
/**
 * Template Name: Page - Order
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

?>
<?php get_header() ?>
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
			<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
		</header>
		<div class="row entry-content">
			<div class="col-sm-8 col-md-8">
			<?php the_content() ?>
			<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
			<?php edit_post_link(__('Edit', 'sandbox'),'<div class="row entry-meta text-center"><div class="col-md-12"><span class="btn btn-danger">','</span></div></div>') ?>
			</div><!-- .post -->
			<div class="col-sm-4 col-md-4 img-col">
				<?php if( get_field('img_order_1') ): ?>
				<img class="imageStyle img-responsive" alt="The Stoemper Shop" src="<?php the_field('img_order_1'); ?>" />
				<?php endif; ?>
				<?php if( get_field('img_order_2') ): ?>
				<img class="imageStyle img-responsive" alt="The Stoemper Shop" src="<?php the_field('img_order_2'); ?>" />
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>
	</article><!-- #content -->
</div>
<?php get_footer() ?>