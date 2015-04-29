<?php
/**
 * Template Name: Page - Media New
 * The template used for displaying media page post content as tiles in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

?>
<?php get_header() ?>
<?php //wp_nav_menu();?>
<div id="container">
	<div id="content" class="panels">
		<div class="blogNav">
			<div class="blogName">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
			</div>
			<?php wp_nav_menu(array('container_class' => 'access','theme_location' => 'media'));?>
		</div>
		<?php query_posts( 'posts_per_page=10&paged='.get_query_var('paged') );?>	
		<div id="nav-above" class="navigation">
			<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older Posts', 'sandbox')) ?> </div>
			<div class="nav-next"><?php previous_posts_link(__('Newer Posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
		</div>
		<?php if (have_posts()): while (have_posts()):the_post(); ?>

		<article id="post-<?php the_ID() ?>" class="featured <?php sandbox_post_class() ?>">
			<div class="entry-date bigdate">
					<time class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></time>
					<h2 class="entry-title post-content-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><span><?php the_title() ?></span></a></h2>
				</div>			
			<div class="entry-content post-content">
				<h4><?php the_title() ?></h4>
				<p><?php the_excerpt(); ?></p>

			<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
			</div>
			<span class="attach-post-image" style="height:300px;display:block;background:url('<?php the_post_image_url('large'); ?>') center center repeat">&nbsp;</span>
		</article><!-- .post -->
			
		<?php endwhile;endif; //next_posts_link(); previous_posts_link(); ?>
		
		<br class="clearfix"/>
		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?></div>
			<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
		</div>
		<?php if ( function_exists('wp_tag_cloud') ) : ?>
			<div class="tagCloud">
				<h2>Tag Cloud</h2>
				<ul>
					<li><?php wp_tag_cloud('smallest=9&largest=16&separator=,'); ?></li>
				</ul>
			</div>
		<?php endif; ?>	
		<?php wp_reset_query();?>
	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer() ?>