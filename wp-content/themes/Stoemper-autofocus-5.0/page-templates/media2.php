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
<div class="container bikes-bground">
	<div id="content" class="panels">
		<div class="row">
			<div class="col-sm-12 col-md-6 blogName">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
			</div>
			<div class="col-sm-12 col-md-6">
				<?php wp_nav_menu(array('container_class' => 'access','theme_location' => 'media'));?>
			</div>
		</div>
		<?php query_posts( 'posts_per_page=10&paged='.get_query_var('paged') );?>	
		<div id="nav-above" class="row navigation">
			<div class="nav-previous col-sm-6 col-md-6"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?></div>
			<div class="nav-next col-sm-6 col-md-6"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php if (have_posts()): while (have_posts()):the_post(); ?>
					<article id="post-<?php the_ID() ?>" class="featured <?php sandbox_post_class() ?>">
							<header class="entry-date bigdate">
								<h2 class="entry-title post-content-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><span><?php the_title() ?></span></a></h2>
								<time class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><span><?php the_time('d M'); ?></span></time>
							</header>							
							<div class="entry-content post-content">
								<h4><?php the_title() ?></h4>
								<p><?php the_excerpt(); ?></p>	
								<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
							</div>
							<span class="attach-post-image" style="height:300px;display:block;background:url('<?php the_post_image_url('large'); ?>') center center repeat">&nbsp;</span>
						</article><!-- .post -->
				<?php endwhile;endif; //next_posts_link(); previous_posts_link(); ?>
				<br class="clear" />
			</div>
		</div>
		<div id="nav-below" class="row navigation">
			<div class="nav-previous col-sm-6 col-md-6"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?></div>
			<div class="nav-next col-sm-6 col-md-6"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
		</div>
		<?php wp_reset_query();?>
	</div><!-- #content -->
	<?php if ( function_exists('wp_tag_cloud') ) : ?>
		<div class="row">
			<div class="col-sm-12 col-md-12 tagCloud">
				<h2>Tag Cloud</h2>
				<ul>
					<li><?php wp_tag_cloud('smallest=9&largest=16&separator=,'); ?></li>
				</ul>
			</div>
		</div>
		<?php endif; ?>	
</div><!--.container-->
<?php get_footer() ?>