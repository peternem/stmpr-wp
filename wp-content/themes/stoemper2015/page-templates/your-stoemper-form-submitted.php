<?php
/**
 * Template Name: Page - Your Stoemper Form - Submitted
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

?>
<?php get_header() ?>
<div id="content" class="inner-container">
	<div class="row">
		<div class="col-md-12">
		<?php if (function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
		</div>
	</div>
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('stoemp-pg-temp');?>>
		<header class="page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
		</header>
		<div class="row entry-content ">
			<div class="col-md-12">
				<?php the_content() ?>
				<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
				<?php edit_post_link(__('Edit', 'sandbox'),'<div class="row entry-meta text-center"><div class="col-md-12"><span class="btn btn-danger">','</span></div></div>') ?>
			</div>
		</div>
	</article>
	<?php endwhile; // end of the loop. ?>
				<div class="row">
		<div class="col-sm-12 col-md-12">
<?php 
$errors = "";
$myemail = "quote@stoemper.com";//<-----Put Your email address here  , information@stoemper.com.

if(empty($_POST['firstName'])  || 
   empty($_POST['email_address']) || 
   empty($_POST['lastName']))
{
    $errors .= "\n Error: all fields are required";
}

$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$postalCode = $_POST['postalCode'];
$email_address = $_POST['email_address'];
$telephone = $_POST['telephone'];

$height = $_POST['height'];
$inseam = $_POST['inseam'];
$shoe_size = $_POST['shoe_size'];
$weight = $_POST['weight'];

$frameModel 			= $_POST['frameModel'];
$frameSize 				= $_POST['frameSize'];
$frameBrakeType 		= $_POST['frameBrakeType'];
$frameFrtDerType 		= $_POST['frameFrtDerType'];
$frameFrtDerCableStop	= $_POST['frameFrtDerCableStop'];
$intendedGearingFrt		= $_POST['intendedGearingFrt'];
$chainRingSize			= $_POST['chainRingSize'];

$make 					= $_POST['make'];
$model 					= $_POST['model'];
$size 					= $_POST['size'];
$modelYear 				= $_POST['modelYear'];
$stemLength 			= $_POST['stemLength'];
$stemSpacers 			= $_POST['stemSpacers'];
$seatPostStyle 			= $_POST['seatPostStyle'];
$crankLength 			= $_POST['crankLength'];
$bbToRail 				= $_POST['bbToRail'];
$bbToSaddle 			= $_POST['bbToSaddle'];
$customFit 				= $_POST['customFit'];

$internalGearCbl 		= $_POST['internalGearCbl'];
$rrBrkCableRouting 		= $_POST['rrBrkCableRouting'];
$chainHanger 			= $_POST['chainHanger'];
$pumpPeg 				= $_POST['pumpPeg'];
$bottomBracket 			= $_POST['bottomBracket'];
$headTube 				= $_POST['headTube'];
$intergratedSeatPost 	= $_POST['intergratedSeatPost'];
$gearingOption 			= $_POST['gearingOption'];
$h20BottleMounts 		= $_POST['h20BottleMounts'];
$handleBarBrand		 	= $_POST['handleBarBrand'];
$headsetBrand 			= $_POST['headsetBrand'];
$bbBrand 				= $_POST['bbBrand'];
$wheelSetBrand			= $_POST['wheelSetBrand'];
$seatPostBrand 			= $_POST['seatPostBrand'];
$stemBrand 				= $_POST['stemBrand'];
$pumpBrand 				= $_POST['pumpBrand'];
$stemSize 				= $_POST['stemSize'];
$anythingElse 			= $_POST['anythingElse'];

$estimate 			= $_POST['estimate'];

$color1 			= $_POST['color1'];
$color2				= $_POST['color2'];
$color3 			= $_POST['color3'];
$color4 			= $_POST['color4'];
$paintNotes			= $_POST['paintNotes'];

$compComments		= $_POST['compComments'];






if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$cc = 
	// To send HTML mail, the Content-type header must be set
	$headers .= "MIME-Version:1.0\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
	
	$headers = "From: $myemail\n";
	$headers .= "Cc: $email_address\n";
	$headers .= "Reply-To: $email_address";
	
	$email_subject = "Stoemper.com - Your Stoemper! - Form Submission";
	$email_body="$firstName $lastName has submitted the Send us your info! - Form. Here are the form details.\n\n";
	$email_body.="Contact Info:\n\n";
	$email_body.="$firstName $lastName\n";
	$email_body.="Address:\n$address1 $address2\n";
	$email_body.="$city, $state, $country, $postalCode\n\n";
	$email_body.="Telephone: $telephone\n";
	$email_body.="Email: $email_address\n\n";
	$email_body.="Physical Info:\n\n";
	$email_body.="Height: $height Inseam: $inseam Shoe Size: $shoe_size Weight: $weight:\n\n";
	
	$email_body.="Stoemper Bike Info:\n\n";
	$email_body.="Frame Model: $frameModel\n";
	$email_body.="Frame Size: $frameSize cm\n";
	$email_body.="Brake Type: $frameBrakeType\n";
	$email_body.="Frame Front Der. Type: $frameFrtDerType\n";
	$email_body.="Frame Front Der. Cable Stop: $frameFrtDerCableStop\n";
	$email_body.="Intended Gearing Front: $intendedGearingFrt\n";
	$email_body.="Chainring Sizes (Big and Small): $chainRingSize\n\n";
	
	$email_body.="Current or Previous Bike Info:\n\n";
	$email_body.="Make: $make\n";
	$email_body.="Model: $model\n";
	$email_body.="Size: $size\n";
	$email_body.="Model Year: $modelYear\n";
	$email_body.="Stem Length: $stemLength\n";
	$email_body.="Stem Spacers: $stemSpacers\n";
	$email_body.="Seat Post Style: $seatPostStyle\n";
	$email_body.="Crank Length: $crankLength\n";
	$email_body.="BB To Saddle: $bbToSaddle\n";
	$email_body.="Custom Fit: $customFit\n\n";
	
	$email_body.="Stoemper Frame Options:\n\n";
	$email_body.="Internal Gear Cbl: $internalGearCbl\n";
	$email_body.="Rear Brk Cable Routing: $rrBrkCableRouting\n";
	$email_body.="Chain Hanger: $chainHanger\n";
	$email_body.="Pump Peg: $pumpPeg\n";
	$email_body.="Bottom Bracket: $bottomBracket\n";
	$email_body.="Head Tube: $headTube\n";
	$email_body.="intergratedSeatPost: $intergratedSeatPost\n";
	$email_body.="Gearing Option: $gearingOption\n";
	$email_body.="H20 Bottle Mounts : $h20BottleMounts\n";
	$email_body.="Handle Bar Brand: $handleBarBrand\n";
	$email_body.="Headset Brand: $headsetBrand\n";
	$email_body.="Bottom Bracket Brand: $bbBrand\n";
	$email_body.="Wheelset Brand: $wheelSetBrand\n";
	$email_body.="Seat Post Brand: $seatPostBrand\n";
	$email_body.="Stem Brand: $stemBrand\n";
	$email_body.="Stem Size: $stemSize \n";
	$email_body.="Pump Brand: $pumpBrand \n\n";
	
	$email_body.="Cost Estimate: $estimate\n\n";
	
	$email_body.="Color Choices:\n\n";
	$email_body.="Color 1: $color1\n";
	$email_body.="Color 2: $color2\n";
	$email_body.="Color 3: $color3\n";
	$email_body.="Color 4: $color4\n";
	$email_body.="Paint Notes: $paintNotes\n\n";
	
	$email_body.="Components:\n\n";
	$email_body.="Component Comments: $compComments\n\n";
		
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	//header('Location: contact-form-thank-you.html');
} 
?>

<?php
echo nl2br($errors);
?>

	</div>
</div>
</div>
<?php get_footer() ?>