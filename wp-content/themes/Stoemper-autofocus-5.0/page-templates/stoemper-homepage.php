<?php
/**
 * Template Name: Page - Home
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */
?>
 <?php get_header(); ?>
	<div class="container index-bground">
		<div id="content">
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?> stoemp-pg-temp">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
				<div class="entry-content bikes">
					<?php the_content() ?>
				</div>	
				<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
			</div>
			<div class="entry-meta">
				<?php edit_post_link(__('Edit', 'sandbox'),'<span class="edit-link btn btn-danger btn-xs">','</span>') ?>
			</div>
		</div><!-- .post -->
		<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
	</div><!-- #content -->


<?php get_footer() ?>