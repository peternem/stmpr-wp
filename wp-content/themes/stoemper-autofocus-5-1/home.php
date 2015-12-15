<?php get_header() ?>
<div id="content" class="inner-container">
	<header class="page-header">
		<h1 class="entry-title"><?php wp_title(''); ?></h1>
		<h2 class="subtitle">Stoemper is Making Noise</h2>
		<?php //wp_nav_menu(array('container_class' => 'access','theme_location' => 'media'));?>
	</header>
	<nav id="nav-above" class="row blogNav">
		<div class="col-md-6 nav-previous"><?php next_posts_link(__('<i class="fa fa-angle-double-left"></i> Older Posts', 'sandbox')) ?> </div>
		<div class="col-md-6 nav-next"><?php previous_posts_link(__('Newer Posts <i class="fa fa-angle-double-right"></i>', 'sandbox')) ?></div>
	</nav>
	<article class="row row-blog-gutter">
		<?php while ( have_posts() ) : the_post() ?>
		<section class="col-sm-4 col-md-4 figure-block">
			<figure id="post-<?php the_ID() ?>" <?php post_class('featured'); ?>>
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('media-thumb-land', array('class' => 'img-responsive')); ?></a>
				<figcaption class="entry-date bigdate">
					
					<h2 class="entry-title post-content-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><span><?php the_title() ?></span></a></h2>
					<div class="post-meta">
					<time class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('d M'); ?></time>
					</div>
				</figcaption>							
				
			</figure><!-- .post -->
		</section>
		<?php endwhile ?>
	</article>
	<nav id="nav-below" class="row blogNav">
		<div class="col-md-6 nav-previous"><?php next_posts_link(__('<i class="fa fa-angle-double-left"></i> Older Posts', 'sandbox')) ?> </div>
		<div class="col-md-6 nav-next"><?php previous_posts_link(__('Newer Posts <i class="fa fa-angle-double-right"></i>', 'sandbox')) ?></div>
	</nav>
		
	<?php if ( function_exists('wp_tag_cloud') ) : ?>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="tagCloud">
					<h2>Tag Cloud: </h2>
					<div>
						<?php 
						$args = array(
							'smallest' => 0.75, 
							'largest' => 2,
							'unit' => 'em',
						);
						
						wp_tag_cloud($args); ?></div>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>	
		</div><!-- #content -->
<?php get_footer() ?>