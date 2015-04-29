<?php
/**
 * Template Name: Page - Darrell - The Bikes
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
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_600x399.jpg"  alt="The Stoemper Darrell" width="600" height="399" class="imageStyleLeft"/>
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_266x399.jpg"  alt="The Stoemper Darrell" width="200" height="300"  class="imageStyleUpperRh"/>
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_fork_200x300.jpg"  alt="The Stoemper Darrell" width="200" height="300"  class="imageStyleLowerRh"/>
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_seattube_200x399.jpg"  alt="The Stoemper Darrell" width="200" height="424" class="imageStyleLeft"/>
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_drivetrain_380x424.jpg"  alt="The Stoemper Darrell" width="380" height="424" class="imageStyleLeft1"/>
						<img src="<?php bloginfo("template_url"); ?>/img/darrell/motofish_darrell_dtlogo_200x200.jpg"  alt="The Stoemper Darrell" width="200" height="200"  class="imageStyleLowerRh2"/>
						 <div class="caption">
							<em>The Stoemper Darrell</em>
						</div>
					</div>
										
					<div id="eddyGeoChart">
						<h3>DARRELL ROAD BIKE GEOMETRY</h3>
<?php
$url = 'http://stoemper.com/wp-content/themes/Stoemper-autofocus-2.0/xml/rd-geometery.xml';

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
						<ul >
							<li>
								All Stoemper ALU frames come with a tapered ENVE carbon fork, painted to match.
							</li>
							<li>
								Choose braze-on or 31.8mm clamp type Front Derailleur.
							</li>
							<li>
								Seat posts are always 27.2 mm
							</li>
							<li>
								Default BB is PF30, please let us know if you need a standard BB
							</li>
							<li>
								Tire clearance up to 27 mm no problem
							</li>
						</ul>
					</div>
					<br class="clear" />
					<div class="imageCenter">
						<img class="imageStyle" alt="The Stoemper Eddy" src="<?php bloginfo("template_url"); ?>/img/darrell/BS3-818x500.jpg">
						<div class="caption">
							<em>Building Stoemper Bikes for The Stoepid Week.</em>
						</div>
					</div>
					
					<div id="nav-above" class="navigation">
						<div class="nav-previous"><a href="/index.php/the-bikes/taylor/">&laquo; TAYL&ouml;R</a></div>
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