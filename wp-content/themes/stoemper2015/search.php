<?php get_header() ?>
	<div id="container" class="container blog-bground">
		<div id="content" class="category_panels">

<?php if (have_posts()) : ?>
			
			<div class="row comment-count">
				<div class="col-md-6">
					<h2 class="page-title"><?php _e('Search Results for:', 'sandbox') ?> <span id="search-terms"><?php echo esc_html(stripslashes($_GET['s']), true); ?></span></h2>
				</div>
				<div class="col-md-6 entry-content">
					<form id="noresults-searchform" class="form-inline" role="form" method="get" action="<?php echo esc_url( home_url()); ?>">
						<div class="form-group">
							<input id="noresults-s"  class="form-control" style="width:200px;margin-right: 5px;" name="s" type="text" value="<?php echo esc_html(stripslashes($_GET['s']), true) ?>" size="40" />
							<input id="noresults-searchsubmit" class="btn btn-default" name="searchsubmit" type="submit" value="<?php _e('Find', 'sandbox') ?>" />
						</div>
					</form>
				</div>
			</div>
			
			<div id="nav-above" class="row navigation">
				<div class="col-md-6 nav-previous">
					<?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?>
				</div>
				<div class="col-md-6 nav-next">
					<?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?>
				</div>
			</div>

<?php $posts = query_posts($query_string . '&post_type=post'); ?>
<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID() ?>" <?php post_class('row');?>>
				<div class="col-md-8 preview">
					<header class="entry-date bigdate">
						<h2 class="entry-title post-content-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><span><?php the_title() ?></span></a></h2>
						<time class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></time>
					</header>		
					<div class="entry-content post-content">
						<h4><?php the_title() ?></h4>
						<p><?php the_excerpt(); ?></p>	
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
					</div>
					<div class="attach-post-image" style="height:300px;display:block;background:url('<?php the_post_image_url('large'); ?>') center center repeat">&nbsp;</div>
				</div><!-- .preview -->
				<div class="col-md-4 entry-meta">
					<span class="author vcard"><?php printf(__('By %s', 'sandbox'), '<a class="url fn n" href="'.get_author_posts_url(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'sandbox'), $authordata->display_name) . '">'.get_the_author().'</a>') ?></span><br />
					<span class="cat-links"><?php printf(__(' Filed under: %s', 'sandbox'), get_the_category_list(', ')) ?></span><br />
					<span><?php the_tags(__('<span class="tag-links">Tags: ', 'sandbox'), ", ", "</span><br/>\n\t\t\t\t\t\n") ?>
					<span class="comments-link">Comments: <?php comments_popup_link(__('Add a Comment', 'sandbox'), __('1', 'sandbox'), __('%', 'sandbox')) ?></span>
					<?php edit_post_link(__('Edit', 'sandbox'), "\t\t\t\t\t<br/><br/><span class=\"edit-link btn btn-danger btn-xs\">", "</span><br/>\n\t\t\t\t\t\n"); ?></span>
				</div><!-- .entry-meta -->

			</div><!-- .post -->

<?php endwhile ?>
			<div id="nav-below" class="row navigation">
				<div class="col-md-6 nav-previous">
					<?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?>
				</div>
				<div class="col-md-6 nav-next">
					<?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?>
				</div>
			</div>
<?php else : ?>

			<div id="post-0" class="row post noresults">
				<div class="col-md-12">
					<h2 class="entry-title"><?php _e('Nothing Found', 'sandbox') ?></h2>
				</div>
				
				<div class="col-md-12 entry-content">
					<p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'sandbox') ?></p>
				</div>
				<div class="col-md-12 entry-content">
					<form id="noresults-searchform" class="form-inline" role="form" method="get" action="<?php echo esc_url( home_url()); ?>">
						<div class="form-group">
							<input id="noresults-s"  class="form-control" style="width:200px;margin-right: 5px;" name="s" type="text" value="<?php echo esc_html(stripslashes($_GET['s']), true) ?>" size="40" />
							<input id="noresults-searchsubmit" class="btn btn-default" name="searchsubmit" type="submit" value="<?php _e('Find', 'sandbox') ?>" />
						</div>
					</form>
				</div>
			</div><!-- .post -->

<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>