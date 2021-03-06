<?php get_header() ?>
	<div id="primary" class="site-content container bikes-bground">
		<div id="content" role="main">
			<?php the_post() ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('stoemp-pg-temp');?>>
					<div class="row">
						<div class="col-md-12">
							<h2 class="entry-title"><?php the_title() ?></h2>
							<div class="full-photo">
								<div class="bigdate photo-credit">&copy; <?php the_time('Y'); ?> <?php the_author(); ?></div>
								<?php the_attachment_image('large'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">	
							<div class="entry-content">
								<h4>Caption</h4>				
								<?php the_content(''.__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox').''); ?>
								<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'sandbox') . '&after=</div>') ?>
								<br/>
								<h4>Exif Data</h4>
								<div class="exif-data">
									<?php grab_exif_data() ?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="entry-meta">
								<a href="<?php echo get_permalink($post->post_parent) ?>" class="attachment-title" rel="attachment">&laquo; Back to: <?php echo get_the_title($post->post_parent) ?></a>
								<?php printf(__('This photograph was taken by %1$s and posted on <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr>.<br/><br/>Bookmark the <a href="%8$s" title="Permalink to %9$s" rel="bookmark">permalink</a>.<br/>Follow any comments here with the <a href="%10$s" title="Comments RSS to %9$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.<br/><br/>', 'sandbox'),
									'<span class="author vcard"><a class="url fn n" href="'.get_author_posts_url(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'sandbox'), $authordata->display_name) . '">'.get_the_author().'</a></span>',
									get_the_time('Y-m-d'),
									get_the_time('H:i:sO'),
									the_date('', '', '', false),
									get_the_time(),
									get_the_category_list(', '),
									get_the_tag_list(' '.__('and tagged').' ', ', ', ''),
									get_permalink(),
									esc_html(get_the_title(), 'double'),
									get_post_comments_feed_link() ) ?>
								<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Comments and trackbacks open ?>
													<?php printf(__('<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox'), get_trackback_url()) ?>
								<?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Only trackbacks open ?>
													<?php printf(__('Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox'), get_trackback_url()) ?>
								<?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Only comments open ?>
													<?php printf(__('Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'sandbox')) ?>
								<?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Comments and trackbacks closed ?>
													<?php _e('Both comments and trackbacks are currently closed.') ?>
								<?php endif; ?>
								
								<?php edit_post_link(__('Edit', 'sandbox'), "\n\t\t\t\t\t<br/><br/><span class=\"edit-link btn btn-danger btn-xs\">", "</span>"); ?>
							</div>
						</div>
					</div><!-- .row -->			
					<div id="nav-below" class="row">
						<div class="col-md-12">
							<div class="navigation">
								<h3>Browse</h3>
								<div class="col-md-6">
									<div class="nav-previous"><?php ps_previous_image_link( '<div class="pre_next_link">&laquo; Previous Image</div> %link' ) ?></div>
								</div>
								<div class="col-md-6">
									<div class="nav-next"><?php ps_next_image_link( '<div class="pre_next_link">Next Image &raquo;</div> %link' ) ?></div>
								</div>
							</div>
						</div>
					</div><!-- .row -->
					<div class="row">
						<div class="col-md-12">
							<?php comments_template(); ?>
						</div>
					</div>
				</div><!-- .post -->
		</div><!-- #content -->
	</div><!-- .container -->
<?php get_footer() ?>