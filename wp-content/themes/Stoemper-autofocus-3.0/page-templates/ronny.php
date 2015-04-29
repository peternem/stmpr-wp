<?php
/**
 * Template Name: Page - Ronny - The Bikes
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

get_header();
//wp_nav_menu();
?>
	<div id="container" class="bikes-bground">
		<div id="content">
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?> stoemp-pg-temp">
				
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php
					if (function_exists('the_subtitle'))
						the_subtitle('<h2 class="subtitle">', '</h2>');
				 ?>
				 <?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
				<div class="entry-content bikes">
					<?php the_content() ?>
					<div class="slideshow">
					<div class="imageCenter">
						<!-- <img src="<?php bloginfo("template_url"); ?>/img/eddy/IMG_1343.jpg"  alt="The Stoemper Eddy" class="imageStyleLeft"/><img src="<?php bloginfo("template_url"); ?>/img/eddy/IMG_1348.jpg"  alt="The Stoemper Eddy" width="190" height="189"  class="imageStyleUpperRh"/><img src="<?php bloginfo("template_url"); ?>/img/eddy/IMG_1342.jpg"  alt="The Stoemper Ronny" width="190" height="189"  class="imageStyleLowerRh"/>-->
						<img src="<?php bloginfo("template_url"); ?>/img/ronny/IMAG0838.jpg"  alt="The Stoemper Ronny" class="imageStyleLeft"/>
						<img src="<?php bloginfo("template_url"); ?>/img/ronny/_MG_5585.jpg"  alt="The Stoemper Ronny" class="imageStyleUpperRh"/>
						<img src="<?php bloginfo("template_url"); ?>/img/ronny/_MG_5593-2.jpg"  alt="The Stoemper Ronny" class="imageStyleLowerRh"/>
						<!-- <img src="<?php bloginfo("template_url"); ?>/img/eddy/twentytree-eddy-todd-logo-290x225.jpg"  alt="The Stoemper eddy" width="290" height="221" class="imageStyleLeft"/>
						<img src="<?php bloginfo("template_url"); ?>/img/eddy/twentytree-eddy-dropout-290x225.jpg"  alt="The Stoemper eddy" width="290" height="221" class="imageStyleLeft1"/>
						<img src="<?php bloginfo("template_url"); ?>/img/eddy/twentytree-eddy-ftfork-253x380.jpg"  alt="The Stoemper eddy" width="253" height="380"  class="imageStyleLowerRh1"/>
						<img src="<?php bloginfo("template_url"); ?>/img/eddy/twentytree-eddy-bike1-545x380.jpg"  alt="The Stoemper eddy" width="545" height="380" class="imageStyleLeft"/> -->
						 <div class="caption">
							<em>The Stoemper eddy Singlespeed Presented by TwentyTree/Gunter Beam</em>
						</div>
					</div>
										
					<div id="eddyGeoChart">
						<h3>RONNY CROSS BIKE GEOMETRY</h3>
<?php
$url = 'http://stoemper.com/wp-content/themes/Stoemper-autofocus-2.0/xml/cx-geometery.xml';

// load SimpleXML
$geometry = new SimpleXMLElement($url, null, true);

echo <<<EOF
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
EOF;
foreach($geometry as $cx_geo) // loop through our books
{
	echo <<<EOF
	<tr>
	        <td>{$cx_geo->Size}</td>
	        <td>{$cx_geo->ETT}</td>
	        <td>{$cx_geo->STC2C}</td>
	        
	        <td>{$cx_geo->HT}</td>
	        <td>{$cx_geo->HTAngle}</td>
	        <td>{$cx_geo->STAngle}</td>
	        
	        <td>{$cx_geo->CSLength}</td>
	        <td>{$cx_geo->BBDrop}</td>
	</tr>

EOF;
}
echo '</table>';
?>

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
						<!-- <img src="<?php bloginfo("template_url"); ?>/img/eddy/twentytree-eddy-cockpit-600x380.jpg"  alt="The Stoemper Eddy in Seattle." class="imageStyle"/>-->
						<img class="imageStyle" alt="The Stoemper Eddy" src="<?php bloginfo("template_url"); ?>/img/ronny/_MG_5517.jpg">
						<div class="caption">
							<em> The Stoemper Ronny</em>
						</div>
					</div>
					
					<div id="nav-above" class="navigation">
						<div class="nav-previous"><a href="/index.php/the-bikes/eddy/">&laquo; Eddy</a></div>
						<div class="nav-next"><a href="/index.php/the-bikes/">The Bikes &raquo;</a></div>
					</div>
					<br class="clear" />
					</div>
				</div>	
				<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>" . __('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
			</div>
			<div class="entry-meta">
				<?php edit_post_link(__('Edit', 'sandbox'),'<span class="edit-link">','</span>') ?>
			</div>
			<br class="clear" />
		</div><!-- .post -->
		<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
	</div><!-- #content -->

<?php get_sidebar() ?>
<?php get_footer() ?>