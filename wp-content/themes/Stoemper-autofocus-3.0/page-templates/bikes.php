<?php
/**
 * Template Name: Page - The Bikes
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

 get_header();
 //wp_nav_menu();?>
	<div id="container" class="bikes-bground">
		<div id="content">
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?> stoemp-pg-temp">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
				<div class="entry-content bikes">
						<?php the_content() ?>
						<div class="slideshow">
							<div class="bikeCategoryDiv"> <img src="<?php bloginfo('template_url'); ?>/img/cyclocross-btn.png" alt="Stoemper Cyclocross Bikes" />
								<div class="rollOver">
									<p><a href="/index.php/the-bikes/ronny/" target="_self">Ronny</a> - Our pro aluminum racing rig.  USGP, GVA, Superprestige, you want it we got it.</p>
									<p><a href="/index.php/the-bikes/eddy/" target="_self">Eddy</a> - Steel cross.  We think ours are some of the best.</p>
								</div>
							  	<br class="clear" />
							</div>
							<div class="bikeCategoryDiv"> <img src="<?php bloginfo('template_url'); ?>/img/road-btn.png" alt="Stoemper Road Bikes" />
								<div class="rollOver">
									<p><a href="/index.php/the-bikes/darrell/" target="_self">Darrell</a> - Our aluminum race bike. It’s light, it’s stiff, and it is dead sexy</p>
									<p><a href="/index.php/the-bikes/taylor/" target="_self">Tayl&ouml;r</a> - Our hands-made steel race bike. Rides like steel – in other words, awesome.</p>
								</div>
							  <br class="clear" />
							</div>
						</div>
						<br class="clear" />
				</div>	
				<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
			</div>
			<br class="clearfix"/>
			<div class="entry-meta">
				<?php edit_post_link(__('Edit', 'sandbox'),'<span class="edit-link">','</span>') ?>
			</div>
			<br class="clear" />
		</div><!-- .post -->
		<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
	</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>