<?php get_header() ?>
	<div id="container" class="container blog-bground">
		<div class="row blogNav">
				<div class="col-md-6 blogName">
					<h1 class="entry-title">MEDIA</h1>
					<h2 class="subtitle">Stoemper is Making Noise</h2>
				</div>
				<div class="col-md-6">
					<?php wp_nav_menu(array('container_class' => 'access','theme_location' => 'media'));?>
				</div>
		</div>
		<div class="row comment-count">
			<div class="col-sm-12 col-md-12">
				<h2 class="page-title"><?php _e('Category Archive:', 'sandbox') ?> <span><?php echo single_cat_title(); ?></span></h2>
			</div>
		</div>
		<div class="archive-meta">
			<div class="col-sm-12 col-md-12">
				<?php if ( !(''== category_description()) ) : echo apply_filters('archive_meta', category_description()); endif; ?>
			</div>	
		</div>
		<div id="nav-above" class="row navigation">
			<div class="col-sm-6 col-md-6 nav-previous">
				<?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?>
			</div>
			<div class="col-sm-6 col-md-6 nav-next">
				<?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?>
			</div>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID() ?>" class="row category_panels <?php sandbox_post_class() ?>">

				<div class="col-sm-12 col-md-8 preview">
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

				<div class="entry-meta col-sm-12 col-md-4">
					<span class="author vcard"><?php printf(__('By %s', 'sandbox'), '<a class="url fn n" href="'.get_author_link(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'sandbox'), $authordata->display_name) . '">'.get_the_author().'</a>') ?></span>
					<br />
<?php if ( $cats_meow = sandbox_cats_meow(', ') ) : /* Returns categories other than the one queried */ ?>
					<span class="cat-links"><?php printf(__('Also posted in %s', 'sandbox'), $cats_meow) ?></span>
					<br />
<?php endif ?>
					<?php the_tags(__('<span class="tag-links">Tagged ', 'sandbox'), ", ", "</span>\n\t\t\t\t\t<br/>\n") ?>
					<span class="comments-link"><?php comments_popup_link(__('Comments (0)', 'sandbox'), __('Comments (1)', 'sandbox'), __('Comments (%)', 'sandbox')) ?></span>
<?php edit_post_link(__('Edit', 'sandbox'), "\t\t\t\t\t<br/><br/><span class=\"edit-link btn btn-danger btn-xs\">", "</span>\n\t\t\t\t\t<br />\n"); ?>
				</div>
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

		<div id="content" class="category_panels">	


		</div><!-- #content .hfeed -->
	</div><!-- #container -->
<?php get_footer() ?>