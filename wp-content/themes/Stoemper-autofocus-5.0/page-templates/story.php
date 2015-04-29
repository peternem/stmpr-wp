<?php
/**
 * Template Name: Page - Story
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

 ?>
<?php get_header() ?>
	<div class="container bikes-bground">
		<div id="content">
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?> stoemp-pg-temp">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
					</div>
				</div>
				<div class="row entry-content bikes slideshow">
					<div class="col-sm-12 col-md-8">
						<?php the_content() ?>
						<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
							
					</div>
					<div class="col-sm-12 col-md-4">
						<img src="http://stoemper.com/images/IMG_0806-295x197.jpg" class="imageStyle img-responsive" />
						<img src="http://stoemper.com/images/IMG_0726-1.jpg" class="imageStyle img-responsive" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="entry-meta">
							<?php edit_post_link(__('Edit', 'sandbox'),'<span class="btn btn-danger">','</span>') ?>
						</div>
					</div>
				</div>
				<?php //get_sidebar(); ?>
				<?php //if ( dynamic_sidebar('sidebar-3') ) : else : endif; ?>
			</div><!-- .post -->
			<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
		</div><!-- #content -->
	</div><!-- #container -->
<?php //get_sidebar() ?>
<?php get_footer() ?>