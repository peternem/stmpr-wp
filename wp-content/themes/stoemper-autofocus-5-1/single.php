<?php get_header() ?>

	<div id="primary" class="inner-container">
		<div id="content" role="main">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb"><li><a href="/">Home</a> </li><li><a href="/media//">Media</a></li> <li class="active"><?php the_title(); ?></li></ol>
				</div>
			</div>
			<div class="row post-header">
				<header class="page-header col-md-12">
					<h1 class="entry-title">Media</h1>
				</header>
			</div>
			<div class="row">
				<div id="nav-above" class="navigation col-md-12">
					<div class="row">
						<div class="nav-previous col-md-6"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?></div>
						<div class="nav-next col-md-6"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
					</div>
				</div>
			</div>
			<?php while ( have_posts() ) : the_post() ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row post-header">
					<div class="col-md-5">
						<h2 class="entry-title"><?php the_title(); ?></h2>
						<?php //if(function_exists('the_subtitle')) the_subtitle( '<h3 class="subtitle">', '</h3>'); ?>
						<p class="author">By: <?php echo get_the_author_link(); ?></p>
					</div>
					<div class="col-md-7 full-photo">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('media-featured', array('class' => 'img-responsive')); ?></a>
					</div>
				</div>
				<div class="row post-content">
					<div class="col-sm-7 col-md-7">
						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'sandbox') . '&after=</div>') ?>
						</div>
					</div>
		
					<div class="col-sm-5 col-md-5">
						<div class="entry-meta">
							<span class="bigdate entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></abbr></span><br/>
							<?php printf(__('Entry written by: %1$s <br /><br />Posted on: <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr><br /><br />Filed under %6$s%7$s<br /><br />Bookmark the <a href="%8$s" title="Permalink to %9$s" rel="bookmark">permalink</a><br /><br />Follow any comments here with the <a href="%10$s" title="Comments RSS to %9$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a><br/><br/>', 'sandbox'),
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
								 
		
							
							
							<span class="attachment-link"><?php link_to_attachment(); ?></span>
							
							<?php if ( function_exists('wp_tag_cloud') ) : ?>
							<div class="tagCloud post-page">
								<h5>Tag Cloud</h5>
								<?php the_tags('','<i class="fa fa-circle"></i>','<br />'); ?>
							</div>
							<?php endif; ?>
							
							<?php edit_post_link(__('Edit', 'sandbox'), "\n\t\t\t\t\t<span class=\"edit-link btn btn-danger btn-xs\">", "</span>"); ?>
						</div>
					</div>
				</div>
			</div><!-- .post -->
			<?php endwhile ?>
		</div>
		
		
	</div>
<?php get_footer() ?>
