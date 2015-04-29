<?php get_header() ?>
	<div id="container" class="container bikes-bground">
		<div id="content" class="panels">
			<div id="nav-above" class="row blogNav">
				<div class="col-sm-6 col-md-6 nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older Posts', 'sandbox')) ?> </div>
				<div class="col-sm-6 col-md-6 nav-next"><?php previous_posts_link(__('Newer Posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<?php while ( have_posts() ) : the_post() ?>
						<article id="post-<?php the_ID() ?>" class="featured <?php sandbox_post_class() ?>">
							<header class="entry-date bigdate">
								<h2 class="entry-title post-content-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><span><?php the_title() ?></span></a></h2>
								<time class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></time>
							</header>							
							<div class="entry-content post-content">
								<h4><?php the_title() ?></h4>
								<p><?php the_excerpt(); ?></p>	
								<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
							</div>
							<span class="attach-post-image" style="height:300px;display:block;background:url('<?php the_post_image_url('large'); ?>') center center repeat">&nbsp;</span>
						</article><!-- .post -->
						<?php comments_template(); ?>
						<?php endwhile ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<?php comments_template(); ?>
				</div>
			</div>
			<div id="nav-below" class="row navigation">
				<div class="col-md-6 nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older Posts', 'sandbox')) ?> </div>
				<div class="col-md-6 nav-next"><?php previous_posts_link(__('Newer Posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
			</div>
		
			<?php if ( function_exists('wp_tag_cloud') ) : ?>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="tagCloud">
							<h2>Tag Cloud: </h2>
							<ul>
								<li><?php wp_tag_cloud('smallest=9&largest=16&separator=,'); ?></li>
							</ul>
						</div>
					</div>
				</div>
			<?php endif; ?>	
		</div><!-- #content -->
	</div><!-- #container -->
<?php get_footer() ?>