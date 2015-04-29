<?php
/**
 * Template Name: Eddy Page - The Bikes
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

get_header();
//wp_nav_menu();
?>
	<div id="container">
		<div id="content">
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?> stoemp-pg-temp">
				
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php
					if (function_exists('the_subtitle'))
						the_subtitle('<h2 class="subtitle">', '</h2>');
 ?>
				<div class="entry-content bikes">
					<div class="slideshow">
						<?php the_content() ?>
						<div class="pageNavBar-frame-top">
					</div>
					<div class="imageCenter">
						<img src="/images/IMG_1343.jpg"  alt="The Stoemper Eddy" class="imageStyleLeft"/><img src="/images/IMG_1348.jpg"  alt="The Stoemper Eddy" width="190" height="189"  class="imageStyleUpperRh"/><img src="/images/IMG_1342.jpg"  alt="The Stoemper Ronny" width="190" height="189"  class="imageStyleLowerRh"/>
						<div class="caption">
							<em>The Stoemper Eddy as riden By Anthony Dickson</em>
						</div>
					</div>
					<script type="text/javascript" src="<?php bloginfo("template_url"); ?>//js/jquery-cx-geo-xml-parse.js"></script>
					
					<div id="eddyGeoChart">
						<h3>EDDY CROSS BIKE GEOMETRY</h3>
						<table id="Citylist1" border="1">
							<tr>
								<th>Size (cm)</th>
								<th>Effective Top Tube Length</th>
								<th>Seat Tube (C-C)</th>
								<th>Head Tube Length</th>
								<th>Head Tube Angle</th>
								<th>Seat Tube Angle</th>
								<th>Chain Stay Length</th>
								<th>Bottom Bracket Drop</th>
							</tr>
						</table>
					</div>
					<div class="standFeatFloat">
						<h3>STANDARD FEATURES</h3>
						<!--<p>Stoemper frames come standard with full carbon monocoque forks.  Steel forks are available upon special request. </p>-->
						<!--<p>All Stoemper steel frames come with the following:</p>-->
						<ul>
							<li>
								1.125" ENVE carbon fork - Painted to match
							</li>
							<li>
								27.2 mm seat post
							</li>
							<li>
								Choose braze-on or 31.8mm clamp type Front Derailleur.
							</li>
							<li>
								Standard threaded English BB
							</li>
						</ul>
					</div>
					<div class="custOptFloat">
						<h3>CUSTOM OPTIONS:</h3>
						<ul>
							<li>
								Partial or full internal routing
							</li>
							<li>
								Integrated seat post
							</li>
							<li>
								Water bottle cage mounts
							</li>
							<li>
								Disc brake or disc-canti combo
							</li>
						</ul>
					</div>
					<br class="clear" />
					<div class="imageCenter">
						<img src="/images/Stoemper-Eddy-AnthonyD.jpg"  alt="The Stoemper Eddy in Seattle." class="imageStyle"/>
						<div class="caption">
							<em> Anthony D. riding the steel Stoemper Eddy at a local MFG cyclocross race in Seattle.</em>
						</div>
					</div>
					
					<div id="nav-above" class="navigation">
						<div class="nav-previous"><a href="ronny.php">&laquo; Ronny</a></div>
						<div class="nav-next"><a href="the-bikes.php">The Bikes &raquo;</a></div>
					</div>
					<br class="clear" />
					  <!-- <div class="pageNavBar"><a href="ronny.php">Ronny &raquo;</a><a href="darrell.php">Darrell &raquo;</a></div>
					  <br class="clear" /> -->
					</div>
				</div>	
				<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>" . __('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
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