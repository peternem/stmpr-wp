<?php /**
 * Template Name: Page - The Bikes
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */
?>
<?php get_header(); ?>
	
<div id="content" class="inner-container">
	<div class="row">
		<div class="col-md-12">
			<?php if (function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
		</div>
	</div>
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('stoemp-pg-temp'); ?>>
				<header class="page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php
					if (function_exists('the_subtitle'))the_subtitle('<h2 class="subtitle">', '</h2>');?>
				</header>
				<section class="row entry-content">
					<div class="col-sm-12 col-md-12">
						<?php the_content();?>
					</div>
				</section>
				<section class="row bikes">
					<div class="col-sm-6 col-md-6 col-lg-6 bikeCategory cx">
						<header>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bike_page_cx_category_img.jpg" alt="Stoemper Cyclocross Bikes" title="Stoemper Cyclocross Bikes" class="img-responsive"/>
						</header>
						<div class="row">
							<div class="col-xs-12 col-md-6 col-md-6">
							    <a href="/the-bikes/ronny/"><img class="img-responsive" alt="ronny" src="/wp-content/uploads/2015/11/IMAG0838-540x.jpg"/></a>
							</div>
							<div class="col-xs-12 col-md-6 col-md-6">
						      	<a href="/the-bikes/ronny/"  target="_self">Ronny</a>
								<p>Our pro aluminum racing rig.  USGP, GVA, Superprestige, you want it we got it.</p>
							</div>
							<div class="clearfix visible-lg-block spacer"></div>
							<div class="col-xs-12 col-md-6 col-md-6">
						    	<a href="/index.php/the-bikes/eddy/"><img class="img-responsive" alt="Eddy" src="/wp-content/uploads/2015/11/twentytree-eddy-bike-540x.jpg"/></a>
					    	</div>
					    	<div class="col-xs-12 col-md-6 col-md-6 ">
					      		<a href="/the-bikes/eddy/"  target="_self">Eddy</a>
								<p>Steel cross.  We think ours are some of the best.</p>
					    	</div>
						</div>
					</div>
				
					<div class="col-sm-6 col-md-6 col-lg-6 bikeCategory road">
						<header>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bike_page_rd_category_img.jpg" alt="Stoemper Road Bikes" title="Stoemper Road Bikes" class="img-responsive"/>
						</header>
						<div class="row">
							<div class="col-xs-12 col-md-6 col-md-6">
							    <a href="/the-bikes/darrell/"><img class="img-responsive" alt="Darrell" src="/wp-content/uploads/2015/11/motofish_darrell_540x.jpg"/></a>
							</div>
							<div class="col-xs-12 col-md-6 col-md-6">
							    <a href="/the-bikes/darrell/"  target="_self">Darrell</a>
								<p>Our aluminum race bike. It's light, it's stiff, and it is dead sexy</p>
							</div>
							<div class="clearfix visible-lg-block spacer"></div>
						  	<div class="col-xs-12 col-md-6 col-md-6">
							    <a href="/the-bikes/taylor/"><img class="img-responsive" alt="ronny" src="/wp-content/uploads/2015/11/taylor-steel-PR5-540x.jpg"/></a>
							</div>
							<div class="col-xs-12 col-md-6 col-md-6 ">
								    <a href="/the-bikes/taylor/"  target="_self">Tayl&ouml;r</a>
									<p>A hand-made steel race bike. Rides like steel - in other words, awesome.</p>
							</div>
						</div>
					</div>
				</section>
				<section class="row bikes">
					<div class="col-sm-6 col-md-6 col-lg-6 bikeCategory track">
						<header>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/angus/bike_page_category_track_img.jpg" alt="Stoemper Track Bikes" title="Stoemper Track Bikes" class="img-responsive"/>
						</header>
						<div class="row">
						  	<div class="col-xs-12 col-md-6 col-md-6">
							    <a href="/index.php/the-bikes/angus/"><img class="img-responsive" alt="Angus" src="/wp-content/uploads/2015/11/Angus_IMG_2471_670-540x.jpg"/></a>
							</div>
							<div class="col-xs-12 col-md-6 col-md-6">
							    <a href="/index.php/the-bikes/angus/"  target="_self">Angus</a>
								<p>A hand-made aluminium track race bike. Race proven performance and sexy looks.</p>
							</div>
						</div>
					</div>
				</section>
			
				<?php edit_post_link(__('Edit', 'sandbox'),'<div class="row entry-meta text-center"><div class="col-md-12"><span class="btn btn-danger">','</span></div></div>') ?>
			<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>" . __('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
		</article>
</div><!-- .post -->
		<?php if (get_post_custom_values('comments'))comments_template(); // Add a key+value of "comments" to enable comments on this page ?>
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>