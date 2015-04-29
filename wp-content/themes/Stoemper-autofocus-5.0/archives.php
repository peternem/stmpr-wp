<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header() ?>
	<div id="container" class="container bikes-bground">
		<div id="content">
			<div class="row">
				<div class="col-md-12">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php the_post() ?>
					<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
						<div class="entry-content bikes">
							<?php the_content() ?>
							<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row archive-content">
				<?php get_sidebar() ?>
			</div> <!-- .archive-content-->
			<div class="row">
				<div class="col-md-12">
					<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages! ?>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #container -->
<?php get_footer() ?>