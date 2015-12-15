<?php get_header() ?>
	<div id="container">
		<div id="content" class="container bikes-bground">
			<div class="row blogNav">
				<div class="col-sm-12 col-md-6 blogName">
					<h1 class="entry-title">MEDIA</h1>
					<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
				</div>
				<div class="col-sm-12 col-md-6">
					<?php wp_nav_menu(array('container_class' => 'access','theme_location' => 'media'));?>
				</div>
			</div>
			<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('row');?>>
				<div class="col-sm-12 col-md-12">
					<h2 class="entry-title"><?php the_title(); ?></h2>
				</div>
				<div class="col-md-12 entry-content">
					<?php the_content() ?>
					<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
				</div>
				<div class="col-md-12 entry-meta">
					<?php edit_post_link(__('Edit', 'sandbox'),'<span class="edit-link btn btn-danger btn-xs">','</span>') ?>
				</div>
			</div><!-- .post -->
			<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
		</div><!-- #content -->
	</div><!-- #container -->
<?php //get_sidebar() ?>
<?php get_footer() ?>
