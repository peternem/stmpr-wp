<?php get_header() ?>
	<div id="container">
		<div id="content">
			<div class="blogNav">
				<div class="blogName">
					<h1 class="entry-title">MEDIA</h1>
					<h2 class="subtitle">Stoemper is Making Noise</h2>
				</div>
				<?php wp_nav_menu(array('container_class' => 'access','theme_location' => 'media'));?>
			</div>
<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>

				</div>

				<div class="entry-meta">
<?php edit_post_link(__('Edit', 'sandbox'),'<span class="edit-link">','</span>') ?>
				</div>

			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
