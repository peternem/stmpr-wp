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
$( document ).ready(function() {

	var list = new Array("0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00" , "0.00");
	
	var flag = null;
	$('#frameModel').change(function () {
		console.log( $('#frameModel').val() );
		flag = $('#frameModel').val()

// 		if(flag=="Ronny") {
// 			$("#bottomBracket" ).prop('selectedIndex',0);
// 			$("#bottomBracket option[value='PF30']").attr("disabled","true");
// 		} else {
// 			$("#bottomBracket" ).prop('selectedIndex',0);
// 			$("#bottomBracket option[value='PF30']").prop('disabled', false);
// 		}
		var id = $(this).find(':selected').attr('data-price')
	 	//var id = $(this).val();
        //var dataString = 'id='+ id;
       // $('#estimate').val(id);
       	//var output = list.push(0,id); 
       	var output = list[0] = id
        console.log(list);

    	var sum = $.sum(list);
       	console.log(sum);
        $('#estimate').val("$" + sum);
        return false;
	});

	$('#internalGearCbl').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[1] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});
	
	$('#intergratedSeatPost').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[2] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});

	$('#handleBarBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[3] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});
	
	$('#headsetBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[4] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});
	
	$('#bbBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[5] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});

	$('#wheelSetBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[6] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});
	
	$('#seatPostBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[7] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});
	$('#stemBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[8] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});

	$('#pumpBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[9] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});
	
	$.sum = function(arr) {
	    var r = 0;
	    $.each(arr, function(i, v) {
	        r += parseInt(v);
	    });
	    return r;
	}
});
</script>
<div class="container bikes-bground">
	<div id="content">
		<div id="post-<?php the_ID(); ?>" <?php post_class('stoemp-pg-temp');?>>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
					</div>
			</div>
			<div class="row entry-content bikes">
				<div class="col-sm-12 col-md-12">
						<?php the_content() ?>
						<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
							
					</div>
				<div class="col-sm-12 col-md-12">
<form class="form-horizontal stoemper_form" role="form" action="http://www.stoemper.com/your-stoemper-form-submitted" method="POST" >
						<h3>Contact Info:</h3>
						<div class="form-group">
							<label for="firstName" class="col-sm-1 control-label">First Name</label>
							<div class="col-sm-3">
								<input type="text" class="form-control input-sm" id="firstName" name="firstName" value="<?php $firstName ?>" >
							</div>
							<label for="lastName" class="col-sm-1 control-label">Last Name</label>
							<div class="col-sm-3">
								<input type="text" class="form-control input-sm" id="lastName" name="lastName" value="<?php $lastName ?>" >
							</div>
						</div>
						<div class="form-group">
							<label for="address1" class="col-sm-1 control-label">Address</label>
							<div class="col-sm-3">
								<input type="text" class="form-control input-sm" id="address1" name="address1" value="<?php $address1 ?>">
							</div>
							<label for="address1" class="col-sm-1 control-label">Address</label>
							<div class="col-sm-3">
								<input type="text" class="form-control input-sm" id="address2" name="address2" value="<?php $address2 ?>" >
							</div>
							<label for="city" class="col-sm-1 control-label">City</label>
							<div class="col-sm-3">
								<input type="text" class="form-control input-sm" id="city" name="city" value="<?php $city ?>">
							</div>
						</div>
						<div class="form-group">
							
							<label for="State" class="col-sm-1 control-label">State</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="state" name="state" value="<?php $state ?>">
							</div>
							<label for="country" class="col-sm-1 control-label">Country</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="country"  name="country" value="<?php $country ?>">
							</div>
							<label for="postalCode" class="col-sm-1 control-label">Postal Code</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="postalCode"  name="postalCode" value="<?php $postalCode ?>">
							</div>
						</div>
						<div class="form-group">		
							<label for="telephone" class="col-sm-1 control-label">Telephone</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="telephone" name="telephone" value="<?php $telephone ?>">
							</div>
							<label for="email" class="col-sm-1 control-label">Email</label>
							<div class="col-sm-4">
								<input type="text" class="form-control input-sm" id="email_address" name="email_address" value="<?php $email_address ?>">
							</div>
						</div>
					
						<h3>Your Physical Info:</h3>
						<div class="form-group">
							<label for="height" class="col-sm-1 control-label">Height</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="height" name="height" value="<?php $height ?>">
							</div>
							<label for="inseam" class="col-sm-1 control-label">Inseam</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="inseam" name="inseam" value="<?php $inseam ?>">
							</div>
							<label for="shoeSize" class="col-sm-1 control-label">Shoe Size</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="shoe_size" name="shoe_size" value="<?php $shoe_size ?>">
							</div>
							<label for="weight" class="col-sm-1 control-label">Weight</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="weight" name="weight" value="<?php $weight ?>" placeholder="Kilogram or Pounds">
							</div>
						</div>
						<h3>Stoemper Bike Info:</h3>
						<div class="form-group">
							<label for="frameModel" class="col-sm-1 control-label">Frame Model</label>
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
							<label for="size" class="col-sm-1 control-label">Size</label>
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
							<label for="brakeType" class="col-sm-1 control-label">Brake type</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="frameBrakeType" name="frameBrakeType" value="<?php $frameBrakeType ?>">
									<option>--Select Type--</option>
								  	<option value="Disc" >Disc</option>
								  	<option value="Cantilever">Cantilever</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="frtDerType" class="col-sm-1 control-label">Ft.Derailleur Type</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="frameFrtDerType" name="frameFrtDerType" value="<?php $frameFrtDerType ?>">
									<option>--Select Type--</option>
								  	<option value ="Braze-on - $0.00" data-price="0.00">Braze-on - $0.00</option>
								  	<option value ="Clamp - $0.00" data-price="0.00">Clamp - $0.00</option>
								  	<option value="none" data-price="0.00">none</option>
								</select>
							</div>
							<label for="frtDerCableStop" class="col-sm-1 control-label">Ft.Derailleur Cable stop?</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" for="frameFrtDerCableStop" name="frameFrtDerCableStop" ">
									<option>--Select --</option>
								  	<option value="Yes">Yes</option>
								  	<option value="No">No</option>
								</select>
							</div>
						
						</div>
						<div class="form-group">
							<label for="intendedGearingFrt" class="col-sm-1 control-label">Intended Gearing Front</label>
							<div class="col-sm-2">
								<select class="form-control input-sm" id="intendedGearingFrt" name="intendedGearingFrt" value="<?php $intendedGearingFrt ?>">
									<option>-- Select --</option>
								  	<option>Double</option>
								  	<option>Single</option>
								</select>
							</div>
							<label for="bigChainRingSize" class="col-sm-2 control-label">Chain Ring Size<br><small>(Big and Small 56t-32t)</small></label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="ChainRingSize" name="ChainRingSize" value="<?php $chainRingSize ?>" placeholder="62t-36t" >
							</div>
							
						</div>
						<h3>Current or Previous Bike Info:</h3>
						<div class="form-group">
							<label for="make" class="col-sm-1 control-label">Make</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="make" name="make" value="<?php $make ?>" placeholder="Make">
							</div>
							<label for="model" class="col-sm-1 control-label">Model</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="model" name="model" value="<?php $model ?>" placeholder="Model">
							</div>
						
							<label for="size" class="col-sm-1 control-label">Size</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="size" name="size" value="<?php $size ?>" placeholder="CM or Inch">
							</div>

							<label for="modelYear" class="col-sm-1 control-label">Year</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="modelYear" name="modelYear" value="<?php $modelYear ?>" placeholder="Model Year">
							</div>
						</div>
						<div class="form-group">
							<label for="stemLength" class="col-sm-1 control-label">Stem Length</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="stemLength" name="stemLength" value="<?php $stemLength ?>" placeholder="Stem Length">
							</div>
							<label for="stemSpacers" class="col-sm-1 control-label">Stem Spacers</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="stemSpacers" name="stemSpacers" value="<?php $stemSpacers ?>" placeholder="Stem Spacers">
							</div>
						
							<label for="seatPostStyle" class="col-sm-1 control-label">Seat Post Style</label>
							<div class="col-sm-2">
								<select class="form-control input-sm"  id="seatPostStyle" name="seatPostStyle" value="<?php $seatPostStyle ?>">
									<option>- Select Style -</option>
								  	<option>Lay back</option>
								  	<option>Straight</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="crankLength" class="col-sm-1 control-label">Crank Length</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="crankLength" name="crankLength" value="<?php $crankLength ?>" placeholder="Crank Length">
							</div>
							<label for="bbToSaddle" class="col-sm-1 control-label">Center of BB to Saddle Top</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="bbToSaddle" name="bbToSaddle" value="<?php $bbToSaddle ?>" placeholder="Inches or CM">
							</div>
						</div>
						<div class="form-group">
							<label for="customFit" class="col-sm-1 control-label">Have you had a custom fit?</label>
							<div class="col-sm-6">
								<textarea class="form-control input-sm" id="customFit" name="customFit" value="<?php $customFit ?>" rows="2"></textarea>
							</div>
						</div>
						

						<h3>Stoemper Frame Options:</h3>
						<div class="form-group">
							<label for="internalGearCbl" class="col-sm-1 control-label">Internal Gear Cables</label>
							<div class="col-sm-2">
								<select class="form-control input-sm" id="internalGearCbl" name="internalGearCbl" value="<?php $internalGearCbl ?>">
									<option>-- Select --</option>
								  	<option value="Yes" data-price="100.00">Yes - $100.00</option>
								  	<option value="No" data-price="100.00">No - $0.00</option>
								</select>
							</div>
							<label for="rrBrkCableRouting" class="col-sm-1 control-label">Rear Brake Cable Routing</label>
							<div class="col-sm-2">
								<select class="form-control input-sm" id="rrBrkCableRouting" name="rrBrkCableRouting" value="<?php $rrBrkCableRouting ?>">
									<option>-- Select --</option>
								  	<option value="Internal">Internal</option>
								  	<option value="External">External</option>
								</select>
							</div>
							<label for="chainHanger" class="col-sm-1 control-label">Chain Hanger</label>
							<div class="col-sm-2">
								<select class="form-control input-sm" id="chainHanger" name="chainHanger" value="<?php $chainHanger ?>">
									<option>-- Select --</option>
								  	<option value="Yes">Yes</option>
								  	<option value="No">No</option>
								</select>
							</div>
							<label for="pumpPeg" class="col-sm-1 control-label">Pump Peg</label>
							<div class="col-sm-2">
								<select class="form-control input-sm" id="pumpPeg" name="pumpPeg" value="<?php $pumpPeg ?>">
									<option>-- Select --</option>
								  	<option value="Yes">Yes</option>
								  	<option value="No">No</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="bottomBracket" class="col-sm-1 control-label">Bottom Bracket</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="bottomBracket" name="bottomBracket" value="<?php $bottomBracket ?>">
									<option>-- Select --</option>
								  	<option id="pf30" value="PF30">PF30 (Standard)</option>
								  	<option value="English">English Threaded</option>
								</select>
							</div>
							<label for="headTube" class="col-sm-1 control-label">Head Tube</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="headTube" name="headTube" value="<?php $headTube ?>">
									<option>-- Select --</option>
								  	<option value="Tapered (Standard)">Tapered (Standard)</option>
								  	<option value="Straight">Straight</option>
								</select>
							</div>
							<label for="intergratedSeatPost" class="col-sm-1 control-label">Intergrated Seat Post</label>
							<div class="col-sm-2">
								<select class="form-control input-sm" id="intergratedSeatPost" name="intergratedSeatPost" value="<?php $intergratedSeatPost ?>">
									<option>-- Select --</option>
								  	<option value="Yes - $150.00" data-price="150.00">Yes - $150.00</option>
								  	<option value="No - $0.00" data-price="0.00">No - $0.00</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="gearingOption" class="col-sm-1 control-label">Gearing Option</label>
							<div class="col-sm-2">
								<select class="form-control input-sm" id="gearingOption" name="gearingOption" value="<?php $gearingOption ?>">
									<option>-- Select --</option>
								  	<option value="Single Speed">Single Speed</option>
								  	<option value="Geared">Geared</option>
								</select>
							</div>
							<label for="h20BottleMounts" class="col-sm-1 control-label">H20 Bottle Mounts</label>
							<div class="col-sm-2">
								<select class="form-control input-sm" id="h20BottleMounts" name="h20BottleMounts" value="<?php $h20BottleMounts ?>">
									<option>-- Select --</option>
								  	<option value="0">0</option>
								  	<option value="1">1</option>
								  	<option value="2">2</option>
								</select>
							</div>
							<label for="handleBarBrand" class="col-sm-1 control-label">Handle Bar</label>
							<div class="col-sm-2">
								<select class="form-control input-sm" id="handleBarBrand" name="handleBarBrand" value="<?php $handleBarBrand ?>">
									<option>-- Select --</option>
								  	<option value="FSA Energy - $109" data-price="109.00">FSA Energy - $109</option>
								  	<option value="FSA SL-K - $309" data-price="309.00">FSA SL-K - $309</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="headsetBrand" class="col-sm-1 control-label">Headset</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="headsetBrand" name="headsetBrand" value="<?php $headsetBrand ?>">
									<option>-- Select --</option>
								  	<option value="FSA Orbit MX - $69.00" data-price="69.00">FSA Orbit MX - $69.00</option>
								  	<option value="FSA Orbit ITA - $109.00" data-price="109.00">FSA Orbit ITA - $109.00</option>
								</select>
							</div>
							<label for="bbBrand" class="col-sm-1 control-label">Bottom Bracket</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="bbBrand" name="bbBrand" value="<?php $bbBrand ?>">
									<option>-- Select --</option>
								  	<option value="FSA PF30 ceramic -$199" data-price="199.99">FSA PF30 ceramic -$199</option>
								  	<option value="FSA PF30 steel - $49" data-price="49.00">FSA PF30 steel - $49</option>
								</select>
							</div>
							<label for="wheelSetBrand" class="col-sm-1 control-label">Wheelset</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="wheelSetBrand" name="wheelSetBrand" value="<?php $wheelSetBrand?>">
									<option value="No" data-price="0.00">-- Select --</option>
								  	<option value="Vision Metron - $2499" data-price="2499">Vision Metron - $2499</option>
<!-- 								<option value="FSA PF30 steel - $49" data-price="49.00">FSA PF30 steel - $49</option> -->
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="seatPostBrand" class="col-sm-1 control-label">Seat Post</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="seatPostBrand" " name="seatPostBrand" value="<?php $seatPostBrand ?>">
									<option>-- Select --</option>
								  	<option value="FSA SL-K - $119" data-price="119.00">FSA SL-K - $119</option>
								  	<option value="FSA Energy - $54" data-price="54.00">FSA Energy - $54</option>
								  	<option value="Painted FSA SL-K - $219" data-price="219.00">Painted FSA SL-K - $219</option>
								  	<option value="Painted FSA Energy - $154" data-price="154.00">Painted FSA Energy - $154</option>
								</select>
							</div>
							<label for="stemBrand" class="col-sm-1 control-label">Stem</label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="stemBrand" name="stemBrand" value="<?php $stemBrand ?>">
									<option>-- Select --</option>
								  	<option value="FSA SL-K - $109" data-price="109.00">FSA SL-K - $109</option>
								  	<option value="FSA Energy - $99" data-price="99.00">FSA Energy - $99.00</option>
								  	<option value="Painted FSA SL-K - $209" data-price="209.00">Painted FSA SL-K - $209</option>
								  	<option value="Painted FSA Energy - $199" data-price="199.00">Painted FSA Energy - $199</option>
								</select>
							</div>
							<label for="stemSize" class="col-sm-1 control-label">Stem Size</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="stemSize" name="stemSize" value="<?php $stemSize ?>">
							</div>
						</div>
						
						<div class="form-group">
							<label for="pumpBrand" class="col-sm-1 control-label">Frame Pump <br><small>Painted to match</small></label>
							<div class="col-sm-3">
								<select class="form-control input-sm" id="pumpBrand" name="pumpBrand" value="<?php $pumpBrand ?>">
									<option value="No pump" data-price="0.00">-- Select --</option>
									<option value="No pump" data-price="0.00">No Pump</option>
								  	<option value="Silca frame pump - $240" data-price="240.00">Silca frame pump - $240</option>
								</select>
							</div>
							<label for="anythingElse" class="col-sm-1 control-label">Anything Else?</label>
							<div class="col-sm-6">
								<textarea class="form-control input-sm" rows="2" id="anythingElse" name="anythingElse" value="<?php $anythingElse ?>"></textarea>
							</div>
						</div>
						<h3>Cost Estimate</h3>
						<div class="form-group">
							<label for="estimate" class="col-sm-1 control-label">Estimate</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="estimate" name="estimate" value="<?php $estimate ?>">
							</div>
						</div>
						<h3>Color Choices</h3>
						<div class="form-group">
							<label for="color1" class="col-sm-1 control-label">Color 1</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="color1" name="color1" value="<?php $color1 ?>">
							</div>
						
							<label for="color2" class="col-sm-1 control-label">Color 2</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="color2" name="color2" value="<?php $color2 ?>">
							</div>	
							<label for="color3" class="col-sm-1 control-label">Color 3</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="color3" name="color3" value="<?php $color3 ?>">
							</div>
						
							<label for="color4" class="col-sm-1 control-label">Color 4</label>
							<div class="col-sm-2">
								<input type="text" class="form-control input-sm" id="color4" name="color4" value="<?php $color4 ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="paintNotes" class="col-sm-1 control-label">Paint Notes</label>
							<div class="col-sm-6">
								<textarea class="form-control input-sm" rows="2" id="paintNotes" name="paintNotes" value="<?php $paintNotes ?>"></textarea>
							</div>
						</div>
						<h3>Components</h3>
						<p>If yor are looking for a complete bike or partial build, please enter what you are looking for here.</p>
						<div class="form-group">
							<label for="compComments" class="col-sm-1 control-label">Comments</label>
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
				<?php //get_sidebar(); ?>
				<?php //if ( dynamic_sidebar('sidebar-3') ) : else : endif; ?>
			</div>
		<!-- .post -->
			<?php //if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
		</div>
	<!-- #content -->
</div>
<!-- #container -->
<?php get_footer() ?>