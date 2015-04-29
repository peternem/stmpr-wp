<?php
/*
Template Name: Links Page
*/
?>
<?php get_header() ?>
	
	<div id="container">
		<div id="content">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
			<?php the_post() ?>
			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<div class="entry-content bikes">
					<?php the_content() ?>
					<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
				</div>
			</div>
			<div class="archive-content">

				<ul id="links-page" class="xoxo">
					<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>') ?>
				</ul>

			</div> <!-- .archive-content-->

			<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages! ?>

		</div><!-- #content -->
	</div><!-- #container -->
<?php get_footer() ?>