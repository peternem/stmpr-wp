<?php
/**
 * Template Name: Page - Your Stoemper Form 
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

?>

<?php get_header() ?>
<script>
jQuery( document ).ready(function() {

	var list = new Array("0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00" , "0.00");
	
	var flag = null;
	jQuery('#frameModel').change(function () {
		console.log( jQuery('#frameModel').val() );
		flag = jQuery('#frameModel').val()

// 		if(flag=="Ronny") {
// 			jQuery("#bottomBracket" ).prop('selectedIndex',0);
// 			jQuery("#bottomBracket option[value='PF30']").attr("disabled","true");
// 		} else {
// 			jQuery("#bottomBracket" ).prop('selectedIndex',0);
// 			jQuery("#bottomBracket option[value='PF30']").prop('disabled', false);
// 		}
		var id = jQuery(this).find(':selected').attr('data-price')
	 	//var id = jQuery(this).val();
        //var dataString = 'id='+ id;
       // jQuery('#estimate').val(id);
       	//var output = list.push(0,id); 
       	var output = list[0] = id
        console.log(list);

    	var sum = jQuery.sum(list);
       	console.log(sum);
        jQuery('#estimate').val("$" + sum);
        return false;
	});

	jQuery('#internalGearCbl').change(function () {
		var id = jQuery(this).find(':selected').attr('data-price') 
       	var output = list[1] = id
        console.log(list);

		var sum = jQuery.sum(list);
		console.log(sum);
		jQuery('#estimate').val("$" + sum);
        return false;
	});
	
	jQuery('#intergratedSeatPost').change(function () {
		var id = jQuery(this).find(':selected').attr('data-price') 
       	var output = list[2] = id
        console.log(list);

		var sum = jQuery.sum(list);
		console.log(sum);
		jQuery('#estimate').val("$" + sum);
        return false;
	});

	jQuery('#handleBarBrand').change(function () {
		var id = jQuery(this).find(':selected').attr('data-price') 
       	var output = list[3] = id
        console.log(list);

		var sum = jQuery.sum(list);
		console.log(sum);
		jQuery('#estimate').val("$" + sum);
        return false;
	});
	
	jQuery('#headsetBrand').change(function () {
		var id = jQuery(this).find(':selected').attr('data-price') 
       	var output = list[4] = id
        console.log(list);

		var sum = jQuery.sum(list);
		console.log(sum);
		jQuery('#estimate').val("$" + sum);
        return false;
	});
	
	jQuery('#bbBrand').change(function () {
		var id = jQuery(this).find(':selected').attr('data-price') 
       	var output = list[5] = id
        console.log(list);

		var sum = jQuery.sum(list);
		console.log(sum);
		jQuery('#estimate').val("$" + sum);
        return false;
	});

	jQuery('#wheelSetBrand').change(function () {
		var id = jQuery(this).find(':selected').attr('data-price') 
       	var output = list[6] = id
        console.log(list);

		var sum = jQuery.sum(list);
		console.log(sum);
		jQuery('#estimate').val("$" + sum);
        return false;
	});
	
	jQuery('#seatPostBrand').change(function () {
		var id = jQuery(this).find(':selected').attr('data-price') 
       	var output = list[7] = id
        console.log(list);

		var sum = jQuery.sum(list);
		console.log(sum);
		jQuery('#estimate').val("$" + sum);
        return false;
	});
	jQuery('#stemBrand').change(function () {
		var id = jQuery(this).find(':selected').attr('data-price') 
       	var output = list[8] = id
        console.log(list);

		var sum = jQuery.sum(list);
		console.log(sum);
		jQuery('#estimate').val("$" + sum);
        return false;
	});

	jQuery('#pumpBrand').change(function () {
		var id = jQuery(this).find(':selected').attr('data-price') 
       	var output = list[9] = id
        console.log(list);

		var sum = jQuery.sum(list);
		console.log(sum);
		jQuery('#estimate').val("$" + sum);
        return false;
	});
	
	jQuery.sum = function(arr) {
	    var r = 0;
	    jQuery.each(arr, function(i, v) {
	        r += parseInt(v);
	    });
	    return r;
	}
});
</script>
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
				<div class="col-sm-12 col-md-12">
						<?php the_content() ?>
						<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
							
				</div>
			</div>
		</article>
	<?php endwhile; // end of the loop. ?>
	<div class="row">	
		<div class="col-sm-12 col-md-12">
			<form class="form-horizontal stoemper_form" role="form" action="http://www.stoemper.com/your-stoemper-form-submitted" method="POST" >
				<h3>Contact Info:</h3>
				<div class="form-group">
					<div class="col-sm-1">
						<label for="firstName" class="control-label">First Name</label>
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control input-sm" id="firstName" name="firstName" value="<?php $firstName ?>" >
					</div>
					<div class="col-sm-1">
						<label for="lastName" class="control-label">Last Name</label>
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control input-sm" id="lastName" name="lastName" value="<?php $lastName ?>" >
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-1">
						<label for="address1" class="control-label">Address</label>
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control input-sm" id="address1" name="address1" value="<?php $address1 ?>">
					</div>
					<div class="col-sm-1">
						<label for="address1" class="control-label">Address</label>
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control input-sm" id="address2" name="address2" value="<?php $address2 ?>" >
					</div>
					<div class="col-sm-1">
						<label for="city" class="control-label">City</label>
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control input-sm" id="city" name="city" value="<?php $city ?>">
					</div>
				</div>
				<div class="form-group">
					
					<div class="col-sm-1"><label for="State" class="control-label">State</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="state" name="state" value="<?php $state ?>">
					</div>
					<div class="col-sm-1"><label for="country" class="control-label">Country</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="country"  name="country" value="<?php $country ?>">
					</div>
					<div class="col-sm-1"><label for="postalCode" class="control-label">Postal Code</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="postalCode"  name="postalCode" value="<?php $postalCode ?>">
					</div>
				</div>
				<div class="form-group">		
					<div class="col-sm-1"><label for="telephone" class="control-label">Telephone</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="telephone" name="telephone" value="<?php $telephone ?>">
					</div>
					<div class="col-sm-1"><label for="email" class="control-label">Email</label></div>
					<div class="col-sm-4">
						<input type="text" class="form-control input-sm" id="email_address" name="email_address" value="<?php $email_address ?>">
					</div>
				</div>
				
				<h3>Your Physical Info:</h3>
				<div class="form-group">
					<div class="col-sm-1"><label for="height" class="control-label">Height</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="height" name="height" value="<?php $height ?>">
					</div>
					<div class="col-sm-1"><label for="inseam" class="control-label">Inseam</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="inseam" name="inseam" value="<?php $inseam ?>">
					</div>
					<div class="col-sm-1"><label for="shoeSize" class="control-label">Shoe Size</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="shoe_size" name="shoe_size" value="<?php $shoe_size ?>">
					</div>
					<div class="col-sm-1"><label for="weight" class="control-label">Weight</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="weight" name="weight" value="<?php $weight ?>" placeholder="Kilogram or Pounds">
					</div>
				</div>
				<h3>Stoemper Bike Info:</h3>
				<div class="form-group">
					<div class="col-sm-1"><label for="frameModel" class="control-label">Frame Model</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="frameModel" name="frameModel" value="<?php $frameModel ?>">
							<option>--Select Model--</option>
						  	<option value="Darrell - $2499.99" data-price="2499.99">Darrell (alu road) - $2499</option>
						  	<option value="Taylor - $1999.99" data-price="1999.99">Tayl&ouml;r (steel road) - $1999</option>
						  	<option value="Ronny - $2499.99" data-price="2499.99">Ronny (alu cross) - $2499</option>
						  	<option value="Eddy - $1999.99" data-price="1999.99">Eddy (steel cross) - $1999</option>
						  	<option value="Angus -$2499.99" data-price="2499.99">Angus (alu track) - $2499</option> 	
						</select>
					</div>
					<div class="col-sm-1"><label for="size" class="control-label">Size</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="frameSize" name="frameSize" value="<?php $frameSize ?>">
							<option>--Select Size--</option>
						  	<option value="48">48</option>
						  	<option value="50">50</option>
						  	<option value="52">52</option>
						  	<option value="54">54</option>
						  	<option value="56">56</option>
						  	<option value="58">58</option>
						  	<option value="60">60</option>
						  	<option value="62">62</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="brakeType" class="control-label">Brake type</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="frameBrakeType" name="frameBrakeType" value="<?php $frameBrakeType ?>">
							<option>--Select Type--</option>
						  	<option value="Disc" >Disc</option>
						  	<option value="Cantilever">Cantilever</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-1"><label for="frtDerType" class="control-label">Ft.Derailleur Type</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="frameFrtDerType" name="frameFrtDerType" value="<?php $frameFrtDerType ?>">
							<option>--Select Type--</option>
						  	<option value ="Braze-on - $0.00" data-price="0.00">Braze-on - $0.00</option>
						  	<option value ="Clamp - $0.00" data-price="0.00">Clamp - $0.00</option>
						  	<option value="none" data-price="0.00">none</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="frtDerCableStop" class="control-label">Ft.Derailleur Cable stop?</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" for="frameFrtDerCableStop" name="frameFrtDerCableStop">
							<option>--Select --</option>
						  	<option value="Yes">Yes</option>
						  	<option value="No">No</option>
						</select>
					</div>
				
				</div>
				<div class="form-group">
					<div class="col-sm-2"><label for="intendedGearingFrt" class="control-label">Intended Gearing Front</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="intendedGearingFrt" name="intendedGearingFrt" value="<?php $intendedGearingFrt ?>">
							<option>-- Select --</option>
						  	<option>Double</option>
						  	<option>Single</option>
						</select>
					</div>
					<div class="col-sm-2"><label for="bigChainRingSize" class="control-label">Chain Ring Size<br><small>(Big and Small 56t-32t)</small></label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="ChainRingSize" name="ChainRingSize" value="<?php $chainRingSize ?>" placeholder="62t-36t" >
					</div>
					
				</div>
				<h3>Current or Previous Bike Info:</h3>
				<div class="form-group">
					<div class="col-sm-1"><label for="make" class="control-label">Make</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="make" name="make" value="<?php $make ?>" placeholder="Make">
					</div>
					<div class="col-sm-1"><label for="model" class="control-label">Model</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="model" name="model" value="<?php $model ?>" placeholder="Model">
					</div>
				
					<div class="col-sm-1"><label for="size" class="control-label">Size</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="size" name="size" value="<?php $size ?>" placeholder="CM or Inch">
					</div>
				
					<div class="col-sm-1"><label for="modelYear" class="control-label">Year</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="modelYear" name="modelYear" value="<?php $modelYear ?>" placeholder="Model Year">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-1"><label for="stemLength" class="control-label">Stem Length</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="stemLength" name="stemLength" value="<?php $stemLength ?>" placeholder="Stem Length">
					</div>
					<div class="col-sm-1"><label for="stemSpacers" class="control-label">Stem Spacers</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="stemSpacers" name="stemSpacers" value="<?php $stemSpacers ?>" placeholder="Stem Spacers">
					</div>
				
					<div class="col-sm-2"><label for="seatPostStyle" class="control-label">Seat Post Style</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm"  id="seatPostStyle" name="seatPostStyle" value="<?php $seatPostStyle ?>">
							<option>- Select Style -</option>
						  	<option>Lay back</option>
						  	<option>Straight</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2"><label for="crankLength" class="control-label">Crank Length</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="crankLength" name="crankLength" value="<?php $crankLength ?>" placeholder="Crank Length">
					</div>
					<div class="col-sm-2"><label for="bbToSaddle" class="control-label">Center of BB to Saddle Top</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="bbToSaddle" name="bbToSaddle" value="<?php $bbToSaddle ?>" placeholder="Inches or CM">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2"><label for="customFit" class="control-label">Have you had a custom fit?</label></div>
					<div class="col-sm-6">
						<textarea class="form-control input-sm" id="customFit" name="customFit" value="<?php $customFit ?>" rows="2"></textarea>
					</div>
				</div>
				
				
				<h3>Stoemper Frame Options:</h3>
				<div class="form-group">
					<div class="col-sm-2"><label for="internalGearCbl" class="control-label">Internal Gear Cables</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="internalGearCbl" name="internalGearCbl" value="<?php $internalGearCbl ?>">
							<option>-- Select --</option>
						  	<option value="Yes" data-price="100.00">Yes - $100.00</option>
						  	<option value="No" data-price="100.00">No - $0.00</option>
						</select>
					</div>
					<div class="col-sm-2"><label for="rrBrkCableRouting" class="control-label">Rear Brake Cable Routing</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="rrBrkCableRouting" name="rrBrkCableRouting" value="<?php $rrBrkCableRouting ?>">
							<option>-- Select --</option>
						  	<option value="Internal">Internal</option>
						  	<option value="External">External</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2"><label for="chainHanger" class="control-label">Chain Hanger</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="chainHanger" name="chainHanger" value="<?php $chainHanger ?>">
							<option>-- Select --</option>
						  	<option value="Yes">Yes</option>
						  	<option value="No">No</option>
						</select>
					</div>
					<div class="col-sm-2"><label for="pumpPeg" class="control-label">Pump Peg</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="pumpPeg" name="pumpPeg" value="<?php $pumpPeg ?>">
							<option>-- Select --</option>
						  	<option value="Yes">Yes</option>
						  	<option value="No">No</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-1"><label for="bottomBracket" class="control-label">Bottom Bracket</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="bottomBracket" name="bottomBracket" value="<?php $bottomBracket ?>">
							<option>-- Select --</option>
						  	<option id="pf30" value="PF30">PF30 (Standard)</option>
						  	<option value="English">English Threaded</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="headTube" class="control-label">Head Tube</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="headTube" name="headTube" value="<?php $headTube ?>">
							<option>-- Select --</option>
						  	<option value="Tapered (Standard)">Tapered (Standard)</option>
						  	<option value="Straight">Straight</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="intergratedSeatPost" class="control-label">Intergrated Seat Post</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="intergratedSeatPost" name="intergratedSeatPost" value="<?php $intergratedSeatPost ?>">
							<option>-- Select --</option>
						  	<option value="Yes - $150.00" data-price="150.00">Yes - $150.00</option>
						  	<option value="No - $0.00" data-price="0.00">No - $0.00</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-1"><label for="gearingOption" class="control-label">Gearing Option</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="gearingOption" name="gearingOption" value="<?php $gearingOption ?>">
							<option>-- Select --</option>
						  	<option value="Single Speed">Single Speed</option>
						  	<option value="Geared">Geared</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="h20BottleMounts" class="control-label">H20 Bottle Mounts</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="h20BottleMounts" name="h20BottleMounts" value="<?php $h20BottleMounts ?>">
							<option>-- Select --</option>
						  	<option value="0">0</option>
						  	<option value="1">1</option>
						  	<option value="2">2</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="handleBarBrand" class="control-label">Handle Bar</label></div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="handleBarBrand" name="handleBarBrand" value="<?php $handleBarBrand ?>">
							<option>-- Select --</option>
						  	<option value="FSA Energy - $109" data-price="109.00">FSA Energy - $109</option>
						  	<option value="FSA SL-K - $309" data-price="309.00">FSA SL-K - $309</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-1"><label for="headsetBrand" class="control-label">Headset</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="headsetBrand" name="headsetBrand" value="<?php $headsetBrand ?>">
							<option>-- Select --</option>
						  	<option value="FSA Orbit MX - $69.00" data-price="69.00">FSA Orbit MX - $69.00</option>
						  	<option value="FSA Orbit ITA - $109.00" data-price="109.00">FSA Orbit ITA - $109.00</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="bbBrand" class="control-label">Bottom Bracket</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="bbBrand" name="bbBrand" value="<?php $bbBrand ?>">
							<option>-- Select --</option>
						  	<option value="FSA PF30 ceramic -$199" data-price="199.99">FSA PF30 ceramic -$199</option>
						  	<option value="FSA PF30 steel - $49" data-price="49.00">FSA PF30 steel - $49</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="wheelSetBrand" class="control-label">Wheelset</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="wheelSetBrand" name="wheelSetBrand" value="<?php $wheelSetBrand?>">
							<option value="No" data-price="0.00">-- Select --</option>
						  	<option value="Vision Metron - $2499" data-price="2499">Vision Metron - $2499</option>
				<!-- 								<option value="FSA PF30 steel - $49" data-price="49.00">FSA PF30 steel - $49</option> -->
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-1"><label for="seatPostBrand" class="control-label">Seat Post</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="seatPostBrand" name="seatPostBrand" value="<?php $seatPostBrand ?>">
							<option>-- Select --</option>
						  	<option value="FSA SL-K - $119" data-price="119.00">FSA SL-K - $119</option>
						  	<option value="FSA Energy - $54" data-price="54.00">FSA Energy - $54</option>
						  	<option value="Painted FSA SL-K - $219" data-price="219.00">Painted FSA SL-K - $219</option>
						  	<option value="Painted FSA Energy - $154" data-price="154.00">Painted FSA Energy - $154</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="stemBrand" class="control-label">Stem</label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="stemBrand" name="stemBrand" value="<?php $stemBrand ?>">
							<option>-- Select --</option>
						  	<option value="FSA SL-K - $109" data-price="109.00">FSA SL-K - $109</option>
						  	<option value="FSA Energy - $99" data-price="99.00">FSA Energy - $99.00</option>
						  	<option value="Painted FSA SL-K - $209" data-price="209.00">Painted FSA SL-K - $209</option>
						  	<option value="Painted FSA Energy - $199" data-price="199.00">Painted FSA Energy - $199</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="stemSize" class="control-label">Stem Size</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="stemSize" name="stemSize" value="<?php $stemSize ?>">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-1"><label for="pumpBrand" class="control-label">Frame Pump <br><small>Painted to match</small></label></div>
					<div class="col-sm-3">
						<select class="form-control input-sm" id="pumpBrand" name="pumpBrand" value="<?php $pumpBrand ?>">
							<option value="No pump" data-price="0.00">-- Select --</option>
							<option value="No pump" data-price="0.00">No Pump</option>
						  	<option value="Silca frame pump - $240" data-price="240.00">Silca frame pump - $240</option>
						</select>
					</div>
					<div class="col-sm-1"><label for="anythingElse" class="control-label">Anything Else?</label></div>
					<div class="col-sm-6">
						<textarea class="form-control input-sm" rows="2" id="anythingElse" name="anythingElse" value="<?php $anythingElse ?>"></textarea>
					</div>
				</div>
				<h3>Cost Estimate</h3>
				<div class="form-group">
					<div class="col-sm-1"><label for="estimate" class="control-label">Estimate</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="estimate" name="estimate" value="<?php $estimate ?>">
					</div>
				</div>
				<h3>Color Choices</h3>
				<div class="form-group">
					<div class="col-sm-1"><label for="color1" class="control-label">Color 1</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="color1" name="color1" value="<?php $color1 ?>">
					</div>
				
					<div class="col-sm-1"><label for="color2" class="control-label">Color 2</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="color2" name="color2" value="<?php $color2 ?>">
					</div>	
					<div class="col-sm-1"><label for="color3" class="control-label">Color 3</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="color3" name="color3" value="<?php $color3 ?>">
					</div>
				
					<div class="col-sm-1"><label for="color4" class="control-label">Color 4</label></div>
					<div class="col-sm-2">
						<input type="text" class="form-control input-sm" id="color4" name="color4" value="<?php $color4 ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2"><label for="paintNotes" class="control-label">Paint Notes</label></div>
					<div class="col-sm-6">
						<textarea class="form-control input-sm" rows="2" id="paintNotes" name="paintNotes" value="<?php $paintNotes ?>"></textarea>
					</div>
				</div>
				<h3>Components</h3>
				<p>If yor are looking for a complete bike or partial build, please enter what you are looking for here.</p>
				<div class="form-group">
					<div class="col-sm-1"><label for="compComments" class="control-label">Comments</label></div>
					<div class="col-sm-6">
						<textarea class="form-control input-sm" rows="2" name="compComments" id="compComments" value="<?php $compComments ?>"></textarea>
						</div>
					</div>
					
					<div class="form-group">
				    	<div class="col-sm-offset-2 col-sm-10">
				      	<button type="submit" value="Send" name="submit" class="btn btn-default">Submit</button>
				    </div>
				  </div>
				</form>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="entry-meta">
					<?php edit_post_link(__('Edit', 'sandbox'),'<span class="btn btn-danger">','</span>') ?>
				</div>
			</div>
		</div>
	</div>
	<!-- .post -->
</div>
<?php get_footer() ?>