<?php
/**
 * Template Name: Page - Post - Index
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

 //*/
?>
<?php //wp_nav_menu(); ?>
<?php get_header() ?>
	<div id="container">
		<div id="content" class="index bikes-bground">
			<div id="nav-above" class="row navigation">
				<div class="col-md-6 nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older Posts', 'sandbox')) ?> </div>
				<div class="col-md-6 nav-next"><?php previous_posts_link(__('Newer Posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
			</div>
			<?php while ( have_posts() ) : the_post() ?>
			<article id="post-<?php the_ID() ?>" class=" <?php sandbox_post_class() ?>">
				<header class="row">
					<div class="col-md-8">
					<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'sandbox'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
					<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
					</div>
					<div class="col-md-4 entry-date">
						<time class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></time>
					</div>
				</header>
				<div class="row">
					<div class="col-md-8 entry-content">
						<?php the_content(''.__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox').''); ?>
						<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'sandbox') . '&after=</div>') ?>
					</div>
					
				</div>
				<footer class="col-md-4 entry-meta">
						<span class="author vcard"><?php printf(__('By %s', 'sandbox'), '<a class="url fn n" href="'.get_author_link(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'sandbox'), $authordata->display_name) . '">'.get_the_author().'</a>') ?></span>
						<span class="cat-links"><?php printf(__('Posted in %s', 'sandbox'), get_the_category_list(', ')) ?></span>
						<?php the_tags(__('<span class="tag-links">Tagged ', 'sandbox'), ", ", "</span>\n\t\t\t\t\t\n") ?>
						<span class="comments-link"><?php comments_popup_link(__('Comments (0)', 'sandbox'), __('Comments (1)', 'sandbox'), __('Comments (%)', 'sandbox')) ?></span>
						<?php edit_post_link(__('Edit', 'sandbox'), "\t\t\t\t\t<br/><br/><span class=\"edit-link btn btn-danger btn-xs\">", "</span>\n\t\t\t\t\t\n"); ?>
				</footer>
				
			</article><!-- .post -->
			<?php comments_template() ?>
			<?php endwhile ?>
			<div id="nav-below" class="row navigation">
				<div class="col-md-6 nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older Posts', 'sandbox')) ?></div>
				<div class="col-md-6 nav-next"><?php previous_posts_link(__('Newer Posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
			</div>
		</div><!-- #content -->
	</div><!-- #container -->
<?php //get_sidebar() ?>
<?php get_footer() ?>