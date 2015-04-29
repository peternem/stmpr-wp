<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header() ?>
	
	<div id="container">
		<div id="content">
						<h1 class="entry-title">MEDIA</h1>
			<h2 class="subtitle">Stoemper is Making Noise</h2>
<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</div>
				<div class="archive-content">

					<?php get_sidebar() ?>

				</div><!-- .archive-content -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages! ?>

		</div><!-- #content -->
	</div><!-- #container -->
<?php get_footer() ?>