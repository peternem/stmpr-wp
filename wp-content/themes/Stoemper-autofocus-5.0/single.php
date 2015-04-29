<?php get_header() ?>

	<div id="primary" class="container site-content blog-bground">
		<div id="content" role="main">
			<div class="row blogNav">
				<div class="col-md-6 blogName">
					<h1 class="entry-title">Media</h1>
					<h2 class="subtitle">Stoemper is Making Noise</h2>
				</div>
				<div class="col-md-6">
					<?php wp_nav_menu(array('container_class' => 'access','theme_location' => 'media'));?>
				</div>
			</div>
			<div class="row">
				<div id="nav-above" class="navigation col-md-12">
					<div class="row">
						<div class="nav-previous col-md-6"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?></div>
						<div class="nav-next col-md-6"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class(); ?>">
						<div class="row">
							<div class="col-md-12">
								<h2 class="entry-title"><?php the_title(); ?></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 full-photo">
								<div class="">
									<span class="photo-credit">&copy; <?php the_time('Y'); ?> <?php the_author(); ?></span>
									<?php the_post_image('large img-responsive'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-8">
								<div class="entry-content">
									<?php the_content(); ?>
									<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'sandbox') . '&after=</div>') ?>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="entry-meta">
									<span class="bigdate entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></span>
									<?php printf(__('Entry written by: %1$s <br /><br />Posted on: <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr><br /><br />Filed under %6$s%7$s<br /><br />Bookmark the <a href="%8$s" title="Permalink to %9$s" rel="bookmark">permalink</a><br /><br />Follow any comments here with the <a href="%10$s" title="Comments RSS to %9$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a><br/><br/>', 'sandbox'),
										'<span class="author vcard"><a class="url fn n" href="'.get_author_link(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'sandbox'), $authordata->display_name) . '">'.get_the_author().'</a></span>',
										get_the_time('Y-m-d'),
										get_the_time('H:i:sO'),
										the_date('', '', '', false),
										get_the_time(),
										get_the_category_list(', '),
										get_the_tag_list(' '.__('and tagged').' ', ', ', ''),
										get_permalink(),
										wp_specialchars(get_the_title(), 'double'),
										comments_rss() ) ?>
										 
				
									<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Comments and trackbacks open ?>
									<?php printf(__('<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox'), get_trackback_url()) ?>
									
									<?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Only trackbacks open ?>
									<?php printf(__('Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox'), get_trackback_url()) ?>
									
									<?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Only comments open ?>
									<?php printf(__('Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'sandbox')) ?>
									
									<?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Comments and trackbacks closed ?>
									<?php _e('Both comments and trackbacks are currently closed.') ?>
									
									<?php endif; ?>
									
									<span class="attachment-link"><?php link_to_attachment(); ?></span>
									
									<?php if ( function_exists('wp_tag_cloud') ) : ?>
									<div class="tagCloud post-page">
										<h5>Tag Cloud</h5>
										<?php the_tags('',' • ','<br />'); ?>
									</div>
									<?php endif; ?>
									
									<?php edit_post_link(__('Edit', 'sandbox'), "\n\t\t\t\t\t<span class=\"edit-link btn btn-danger btn-xs\">", "</span>"); ?>
								</div>
							</div>
						</div>
					</div><!-- .post -->
				</div>
			</div>
			
		</div>
		
		
	</div>
	<div class="container comment-bground">
		<?php comments_template('', true); ?>
	</div>
<?php get_footer() ?>
