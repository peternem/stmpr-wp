<?php
/**
 * Template Name: Quote - 2 Column Layout xx
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */

?>

<?php get_header() ?>
<script>
$( document ).ready(function() {

	var list = new Array("0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00");
	
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
	
	$('#headsetBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[3] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});
	
	$('#bbBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[4] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});
	
	$('#seatPostBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[5] = id
        console.log(list);

		var sum = $.sum(list);
		console.log(sum);
		$('#estimate').val("$" + sum);
        return false;
	});

	$('#stemBrand').change(function () {
		var id = $(this).find(':selected').attr('data-price') 
       	var output = list[6] = id
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
		<div id="post-<?php the_ID(); ?>"
			class="<?php sandbox_post_class() ?> stoemp-pg-temp">
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
<form class="form-horizontal stoemper_form" role="form" action="http://www.stoemper.com/your-bike-info-submitted" method="POST" >
						<h3>Contact Info:</h3>
						<div class="form-group">
							<label for="firstName" class="col-sm-1 control-label">First Name</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="firstName" name="firstName" value="<?=$firstName ?>" >
							</div>
							<label for="lastName" class="col-sm-1 control-label">Last Name</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="lastName" name="lastName" value="<?=$lastName ?>" >
							</div>
						</div>
						<div class="form-group">
							<label for="address1" class="col-sm-1 control-label">Address</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="address1" name="address1" value="<?=$address1 ?>">
							</div>
							<label for="address1" class="col-sm-1 control-label">Address</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="address2" name="address2" value="<?=$address2 ?>" >
							</div>
							<label for="city" class="col-sm-1 control-label">City</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="city" name="city" value="<?=$city ?>">
							</div>
						</div>
						<div class="form-group">
							
							<label for="State" class="col-sm-1 control-label">State</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="state" name="state" value="<?=$state ?>">
							</div>
							<label for="country" class="col-sm-1 control-label">Country</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="country"  name="country" value="<?=$country ?>">
							</div>
							<label for="postalCode" class="col-sm-1 control-label">Postal Code</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="postalCode"  name="postalCode" value="<?=$postalCode ?>">
							</div>
						</div>
						<div class="form-group">		
							<label for="telephone" class="col-sm-1 control-label">Telephone</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="telephone" name="telephone" value="<?=$telephone ?>">
							</div>
							<label for="email" class="col-sm-1 control-label">Email</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email_address" name="email_address" value="<?=$email_address ?>">
							</div>
						</div>
					
						<h3>Your Physical Info:</h3>
						<div class="form-group">
							<label for="height" class="col-sm-1 control-label">Height</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="height" name="height" value="<?=$height ?>">
							</div>
							<label for="inseam" class="col-sm-1 control-label">Inseam</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="inseam" name="inseam" value="<?=$inseam ?>">
							</div>
							<label for="shoeSize" class="col-sm-1 control-label">Shoe Size</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="shoe_size" name="shoe_size" value="<?=$shoe_size ?>">
							</div>
							<label for="weight" class="col-sm-1 control-label">Weight</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="weight" name="weight" value="<?=$weight ?>" placeholder="Kilogram or Pounds">
							</div>
						</div>
						<h3>Stoemper Bike Info:</h3>
						<div class="form-group">
							<label for="frameModel" class="col-sm-1 control-label">Frame Model</label>
							<div class="col-sm-3">
								<select class="form-control" id="frameModel" name="frameModel" value="<?=$frameModel ?>">
									<option>--Select Model--</option>
								  	<option value="Darrell" data-price="2499.99">Darrell (alu road) - $2499</option>
								  	<option value="Taylor" data-price="2099.99">Tayl&ouml;r (steel road) - $2099</option>
								  	<option value="Ronny" data-price="2499.99">Ronny (alu cross) - $2499</option>
								  	<option value="Eddy" data-price="2099.99">Eddy (steel cross) - $2099</option>
								  	<option value="Angus" data-price="2499.99">Angus (alu track) - $2499</option> 	
								</select>
							</div>
							<label for="size" class="col-sm-1 control-label">Size</label>
							<div class="col-sm-2">
								<select class="form-control" id="frameSize" name="frameSize" value="<?=$frameSize ?>">
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
								<select class="form-control" id="frameBrakeType" name="frameBrakeType" value="<?=$frameBrakeType ?>">
									<option>--Select Type--</option>
								  	<option value="Disc" >Disc</option>
								  	<option value="Cantilever">Cantilever</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="frtDerType" class="col-sm-1 control-label">Ft.Derailleur Type</label>
							<div class="col-sm-3">
								<select class="form-control" id="frameFrtDerType" name="frameFrtDerType" value="<?=$frameFrtDerType ?>">
									<option>--Select Type--</option>
								  	<option value ="Braze-on" data-price="0.00">Braze-on - $0.00</option>
								  	<option value ="Clamp" data-price="0.00">Clamp - $0.00</option>
								  	<option value="none" data-price="0.00">none</option>
								</select>
							</div>
							<label for="frtDerCableStop" class="col-sm-1 control-label">Ft.Derailleur Cable stop?</label>
							<div class="col-sm-3">
								<select class="form-control" for="frameFrtDerCableStop" name="frameFrtDerCableStop" ">
									<option>--Select --</option>
								  	<option value="Yes">Yes</option>
								  	<option value="No">No</option>
								</select>
							</div>
						
						</div>
						<div class="form-group">
							<label for="intendedGearingFrt" class="col-sm-1 control-label">Intended Gearing Front</label>
							<div class="col-sm-2">
								<select class="form-control" id="intendedGearingFrt" name="intendedGearingFrt" value="<?=$intendedGearingFrt ?>">
									<option>-- Select --</option>
								  	<option>Double</option>
								  	<option>Single</option>
								</select>
							</div>
							<label for="bigChainRingSize" class="col-sm-2 control-label">Big Chain Ring Size</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="bigChainRingSize" name="bigChainRingSize" value="<?=$bigChainRingSize ?>" placeholder="62t" >
							</div>
						
							<label for="smChainRingSize" class="col-sm-2 control-label">Small Chain Ring Size</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="smChainRingSize" name="smChainRingSize" value="<?=$smChainRingSize ?>" placeholder="38t">
							</div>
							
						</div>
						<h3>Current or Previous Bike Info:</h3>
						<div class="form-group">
							<label for="make" class="col-sm-1 control-label">Make</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="make" name="make" value="<?=$make ?>" placeholder="Make">
							</div>
							<label for="model" class="col-sm-1 control-label">Model</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="model" name="model" value="<?=$model ?>" placeholder="Model">
							</div>
						
							<label for="size" class="col-sm-1 control-label">Size</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="size" name="size" value="<?=$size ?>" placeholder="CM or Inch">
							</div>

							<label for="modelYear" class="col-sm-1 control-label">Year</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="modelYear" name="modelYear" value="<?=$modelYear ?>" placeholder="Model Year">
							</div>
						</div>
						<div class="form-group">
							<label for="stemLength" class="col-sm-1 control-label">Stem Length</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="stemLength" name="stemLength" value="<?=$stemLength ?>" placeholder="Stem Length">
							</div>
							<label for="stemSpacers" class="col-sm-1 control-label">Stem Spacers</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="stemSpacers" name="stemSpacers" value="<?=$stemSpacers ?>" placeholder="Stem Spacers">
							</div>
						
							<label for="seatPostStyle" class="col-sm-1 control-label">Seat Post Style</label>
							<div class="col-sm-2">
								<select class="form-control"  id="seatPostStyle" name="seatPostStyle" value="<?=$seatPostStyle ?>">
									<option>- Select Style -</option>
								  	<option>Lay back</option>
								  	<option>Straight</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="crankLength" class="col-sm-1 control-label">Crank Length</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="crankLength" name="crankLength" value="<?=$crankLength ?>" placeholder="Crank Length">
							</div>
							<label for="bbToSaddle" class="col-sm-1 control-label">Center of BB to Saddle Top</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="bbToSaddle" name="bbToSaddle" value="<?=$bbToSaddle ?>" placeholder="Inches or CM">
							</div>
						</div>
						<div class="form-group">
							<label for="customFit" class="col-sm-1 control-label">Have you had a custom fit?</label>
							<div class="col-sm-6">
								<textarea class="form-control" id="customFit" name="customFit" value="<?=$customFit ?>" rows="2"></textarea>
							</div>
						</div>
						

						<h3>Stoemper Frame Options:</h3>
						<div class="form-group">
							<label for="internalGearCbl" class="col-sm-1 control-label">Internal Gear Cables</label>
							<div class="col-sm-2">
								<select class="form-control" id="internalGearCbl" name="internalGearCbl" value="<?=$internalGearCbl ?>">
									<option>-- Select --</option>
								  	<option value="Yes" data-price="100.00">Yes - $100.00</option>
								  	<option value="No" data-price="100.00">No - $0.00</option>
								</select>
							</div>
							<label for="rrBrkCableRouting" class="col-sm-1 control-label">Rear Brake Cable Routing</label>
							<div class="col-sm-2">
								<select class="form-control" id="rrBrkCableRouting" name="rrBrkCableRouting" value="<?=$rrBrkCableRouting ?>">
									<option>-- Select --</option>
								  	<option value="Internal">Internal</option>
								  	<option value="External">External</option>
								</select>
							</div>
							<label for="chainHanger" class="col-sm-1 control-label">Chain Hanger</label>
							<div class="col-sm-2">
								<select class="form-control" id="chainHanger" name="chainHanger" value="<?=$chainHanger ?>">
									<option>-- Select --</option>
								  	<option value="Yes">Yes</option>
								  	<option value="No">No</option>
								</select>
							</div>
							<label for="pumpPeg" class="col-sm-1 control-label">Pump Peg</label>
							<div class="col-sm-2">
								<select class="form-control" id="pumpPeg" name="pumpPeg" value="<?=$pumpPeg ?>">
									<option>-- Select --</option>
								  	<option value="Yes">Yes</option>
								  	<option value="No">No</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="bottomBracket" class="col-sm-1 control-label">Bottom Bracket</label>
							<div class="col-sm-3">
								<select class="form-control" id="bottomBracket" name="bottomBracket" value="<?=$bottomBracket ?>">
									<option>-- Select --</option>
								  	<option id="pf30" value="PF30">PF30 (Standard)</option>
								  	<option value="English">English Threaded</option>
								</select>
							</div>
							<label for="headTube" class="col-sm-1 control-label">Head Tube</label>
							<div class="col-sm-3">
								<select class="form-control" id="headTube" name="headTube" value="<?=$headTube ?>">
									<option>-- Select --</option>
								  	<option value="Tappered (Standard)">Tapered (Standard)</option>
								  	<option value="Straight">Straight</option>
								</select>
							</div>
							<label for="intergratedSeatPost" class="col-sm-1 control-label">Intergrated Seat Post</label>
							<div class="col-sm-2">
								<select class="form-control" id="intergratedSeatPost" name="intergratedSeatPost" value="<?=$intergratedSeatPost ?>">
									<option>-- Select --</option>
								  	<option value="Yes - $150.00" data-price="150.00">Yes - $150.00</option>
								  	<option value="No - $0.00" data-price="0.00">No - $0.00</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="gearingOption" class="col-sm-1 control-label">Gearing Option</label>
							<div class="col-sm-2">
								<select class="form-control" id="gearingOption" name="gearingOption" value="<?=$gearingOption ?>">
									<option>-- Select --</option>
								  	<option value="Single Speed">Single Speed</option>
								  	<option value="Geared">Geared</option>
								</select>
							</div>
							<label for="h20BottleMounts" class="col-sm-1 control-label">H20 Bottle Mounts</label>
							<div class="col-sm-2">
								<select class="form-control" id="h20BottleMounts" name="h20BottleMounts" value="<?=$h20BottleMounts ?>">
									<option>-- Select --</option>
								  	<option value="0">0</option>
								  	<option value="1">1</option>
								  	<option value="2">2</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="headsetBrand" class="col-sm-1 control-label">Headset Brand</label>
							<div class="col-sm-3">
								<select class="form-control" id="headsetBrand" name="headsetBrand" value="<?=$headsetBrand ?>">
									<option>-- Select --</option>
								  	<option value="Chris King - $159.00" data-price="159.00">Chris King - $159.00</option>
								  	<option value="Cane Creek 110 - $149.00" data-price="149.00">Cane Creek 110 - $149.00</option>
								  	<option value="Cane Creek 40 - $40.00" data-price="40.00">Cane Creek 40 - $40.00</option>
								</select>
							</div>
							<label for="bbBrand" class="col-sm-1 control-label">BB Brand</label>
							<div class="col-sm-3">
								<select class="form-control" id="bbBrand" name="bbBrand" value="<?=$bbBrand ?>">
									<option>-- Select --</option>
								  	<option value="Chris King - $159.00 PF30" data-price="159.00">Chris King - $159.00 PF30</option>
								  	<option value="Cane Creek 110 - $149.00 PF30" data-price="149.00">Cane Creek 110 - $149.00 PF30</option>
								  	<option value="Cane Creek 40 - $40.00 PF30" data-price="40.00">Cane Creek 40 - $40.00 PF30</option>
								  	<option value="Chris King - $159.00 English" data-price="159.00">Chris King - $159.00 English</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="seatPostBrand" class="col-sm-1 control-label">Seat Post</label>
							<div class="col-sm-3">
								<select class="form-control" id="seatPostBrand" " name="seatPostBrand" value="<?=$seatPostBrand ?>">
									<option>-- Select --</option>
								  	<option value="Enve - $250.00" data-price="250.00">Enve - $250.00</option>
								  	<option value="Enve Painted - $350.00" data-price="350.00">Enve Painted - $350.00</option>
								  	<option value="Ritchey - $65.00" data-price="65.00">Ritchey - $65.00</option>
								  	<option value="Ritchey Painted - $165.00" data-price="165.00">Ritchey Painted - $165.00</option>
								</select>
							</div>
							<label for="stemBrand" class="col-sm-1 control-label">Stem</label>
							<div class="col-sm-3">
								<select class="form-control" id="stemBrand" name="stemBrand" value="<?=$stemBrand ?>">
									<option>-- Select --</option>
								  	<option value="Enve - $250.00" data-price="250.00">Enve - $250.00</option>
								  	<option value="Enve Painted - $350.00" data-price="350.00">Enve Painted - $350.00</option>
								  	<option value="Ritchey - $65.00" data-price="65.00">Ritchey - $65.00</option>
								  	<option value="Ritchey Painted - $165.00" data-price="165.00">Ritchey Painted - $165.00</option>
								</select>
							</div>
							<label for="stemSize" class="col-sm-1 control-label">Stem Size</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="stemSize" name="stemSize" value="<?=$stemSize ?>">
							</div>
						</div>
						
						<div class="form-group">
							<label for="anythingElse" class="col-sm-1 control-label">Anything Else?</label>
							<div class="col-sm-6">
								<textarea class="form-control" rows="2" id="anythingElse" name="anythingElse" value="<?=$anythingElse ?>"></textarea>
							</div>
						</div>
						<h3>Cost Estimate</h3>
						<div class="form-group">
							<label for="estimate" class="col-sm-1 control-label">Estimate</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="estimate" name="estimate" value="<?=$estimate ?>">
							</div>
						</div>
						<h3>Color Choices</h3>
						<div class="form-group">
							<label for="color1" class="col-sm-1 control-label">Color 1</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="color1" name="color1" value="<?=$color1 ?>">
							</div>
						
							<label for="color2" class="col-sm-1 control-label">Color 2</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="color2" name="color2" value="<?=$color2 ?>">
							</div>	
							<label for="color3" class="col-sm-1 control-label">Color 3</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="color3" name="color3" value="<?=$color3 ?>">
							</div>
						
							<label for="color4" class="col-sm-1 control-label">Color 4</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="color4" name="color4" value="<?=$color4 ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="paintNotes" class="col-sm-1 control-label">Paint Notes</label>
							<div class="col-sm-6">
								<textarea class="form-control" rows="2" id="paintNotes" name="paintNotes" value="<?=$paintNotes ?>"></textarea>
							</div>
						</div>
						<h3>Components</h3>
						<p>If yor are looking for a complete bike or partial build, please enter what you are looking for here.</p>
						<div class="form-group">
							<label for="compComments" class="col-sm-1 control-label">Comments</label>
							<div class="col-sm-6">
								<textarea class="form-control" rows="2" name="compComments" id="compComments" value="<?=$compComments ?>"></textarea>
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
			<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
		</div>
	<!-- #content -->
</div>
<!-- #container -->
<?php get_footer() ?>