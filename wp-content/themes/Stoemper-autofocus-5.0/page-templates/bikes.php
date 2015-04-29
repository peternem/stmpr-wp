<?php /**
 * Template Name: Page - The Bikes
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */
?>
<?php get_header(); ?>
	<div class="container bikes-bground">
		<div id="content">
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class(); ?> stoemp-pg-temp">
				<div class="row">
					<div class="col-md-12">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php
						if (function_exists('the_subtitle'))the_subtitle('<h2 class="subtitle">', '</h2>');?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php
						if (function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs();
					?>
					</div>
				</div>
				<div class="row entry-content bikes">
					<div class="col-sm-12 col-md-12">
						<?php the_content();?>
					</div>
				</div>
				<div class="row slideshow">
					<div class="col-sm-12 col-md-6 bikeCategory">
						<header>
							<img src="<?php bloginfo('template_url'); ?>/img/bike_page_cx_category_img.jpg" alt="Stoemper Cyclocross Bikes" title="Stoemper Cyclocross Bikes" class="img-responsive"/>
						</header>
						<ul class="media-list">
							<li class="media">
							    <a class="pull-left" href="/index.php/the-bikes/ronny/"><img class="img-responsive" alt="ronny" src="<?php bloginfo('template_url'); ?>/img/ronny/IMAG0838-200.jpg"/></a>
							    <div class="media-body">
							      <a href="/index.php/the-bikes/ronny/" target="_self">Ronny</a>
									<p>Our pro aluminum racing rig.  USGP, GVA, Superprestige, you want it we got it.</p>
							    </div>
							</li>
						  	<li class="media">
							    <a class="pull-left" href="/index.php/the-bikes/eddy/"><img class="img-responsive" alt="Eddy" src="<?php bloginfo('template_url'); ?>/img/eddy/twentytree-eddy-bike-200.jpg"/></a>
						    	<div class="media-body">
						      		<a href="/index.php/the-bikes/eddy/" target="_self">Eddy</a>
									<p>Steel cross.  We think ours are some of the best.</p>
						    	</div>
							</li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-6  bikeCategory">
						<header>
							<img src="<?php bloginfo('template_url'); ?>/img/bike_page_rd_category_img.jpg" alt="Stoemper Road Bikes" title="Stoemper Road Bikes" class="img-responsive"/>
						</header>
						<ul class="media-list">
							<li class="media">
							    <a class="pull-left" href="/index.php/the-bikes/darrell/"><img class="img-responsive" alt="Darrell" src="<?php bloginfo('template_url'); ?>/img/darrell/motofish_darrell_200x120.jpg"/></a>
							    <div class="media-body">
							      <a href="/index.php/the-bikes/darrell/" target="_self">Darrell</a>
									<p>Our aluminum race bike. It’s light, it’s stiff, and it is dead sexy</p>
							    </div>
						  	</li>
						  	<li class="media">
							    <a class="pull-left" href="/index.php/the-bikes/taylor/"><img class="img-responsive" alt="ronny" src="<?php bloginfo('template_url'); ?>/img/taylor/taylor-road-steel-200x120.jpg"/></a>
							    <div class="media-body">
							      <a href="/index.php/the-bikes/taylor/" target="_self">Tayl&ouml;r</a>
									<p>A hand-made steel race bike. Rides like steel – in other words, awesome.</p>
							    </div>
						  	</li>
						</ul>
					</div>
				</div>
				<div class="row slideshow">
					<div class="col-sm-12 col-md-6  bikeCategory">
							<header>
								<img src="<?php bloginfo('template_url'); ?>/img/angus/bike_page_category_track_img.jpg" alt="Stoemper Track Bikes" title="Stoemper Track Bikes" class="img-responsive"/>
							</header>
							<ul class="media-list">
							  	<li class="media">
								    <a class="pull-left" href="/index.php/the-bikes/angus/"><img class="img-responsive" alt="Angus" src="<?php bloginfo('template_url'); ?>/img/angus/Angus_IMG_2471_200.jpg"/></a>
								    <div class="media-body">
								      <a href="/index.php/the-bikes/angus/" target="_self">Angus</a>
										<p>A hand-made steel track race bike. Race proven performance and sexy looks.</p>
								    </div>
							  	</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row entry-meta">
					<div class="col-sm-12 col-md-12">
						<?php edit_post_link(__('Edit', 'sandbox'), '<br/><span class="btn btn-danger">', '</span>'); ?>
					</div>
				</div>	
			<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>" . __('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
		</div>
		</div><!-- .post -->
		<?php if (get_post_custom_values('comments'))comments_template(); // Add a key+value of "comments" to enable comments on this page ?>
	</div><!-- #content -->
<?php get_footer(); ?>