<?php get_header(); ?>

	<div id="container" class="container blog-bground">
		<div id="content">
			<div id="post-0" class="post error404">			
				<div class="row category">
					<div class="col-md-12">
						<h2 class="entry-title"><?php _e('Not Found', 'sandbox') ?></h2>
					</div>	
				</div>
				<div class="row entry-content">
					<div class="col-md-12">
						<p><?php _e('Apologies, but we were unable to find what you were looking for. Perhaps browseing the archive will help.', 'sandbox') ?></p>
					</div>
				</div>
				<div class="row archive-content">
					<div class="col-md-12">
						<?php get_sidebar() ?>
					</div>
				</div><!-- .archive-content -->
			</div><!-- .post -->

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>