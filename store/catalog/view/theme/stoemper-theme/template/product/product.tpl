<?php echo $header; ?>
<div class="row">
<?php //echo $column_left; ?>
<div id="content" class="col-md-12"><?php echo $content_top; ?>
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <header class="page-header"><h1><?php echo $heading_title; ?></h1></header>
  <div class="row">
    <?php if ($thumb || $images) { ?>
    <div class="left col-sm-6 col-md-6 product-info">
      <?php if ($thumb) { ?>
      <div class="image">
      	<a href="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>" class="colorbox">
      		<img class="img-thumbnail" src="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" id="image" />
      	</a>
      </div>
      <?php } ?>
      <?php if ($images) { ?>
      <div class="image-additional">
        <?php foreach ($images as $image) { ?>
        <a href="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>" class="colorbox"><img class="img-thumbnail" src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a>
        <?php } ?>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
    <div class="right col-sm-6 col-md-6 product-info">
    	 <h3>Product Info</h3>
      <div class="description">
        <?php if ($manufacturer) { ?>
         <div class="txt-mfg">
         	<span><?php echo $text_manufacturer; ?></span>
         	<span><a href="<?php echo $manufacturers; ?>"><?php echo $manufacturer; ?></a></span>
         </div>
        <?php } ?>
         <div class="txt-model">
         	<span><?php echo $text_model; ?></span>
         	<span><?php echo $model; ?></span>
         </div>
        <?php if ($reward) { ?>
         <div class="txt-reward">
         	<span><?php echo $text_reward; ?></span>
         	<span><?php echo $reward; ?></span>
         </div>
        <?php } ?>
        <div class="txt-stock">
        	<span><?php echo $text_stock; ?></span>
        	<span><?php echo $stock; ?></span>
        </div>
       </div>
      <?php if ($price) { ?>
      <div class="price">
      	<div class="txt-price">
      		<span><?php echo $text_price; ?></span>
        	<?php if (!$special) { ?>
        	<span><?php echo $price; ?></span>
        	<?php } else { ?>
        	<span class="price-old"><?php echo $price; ?></span> 
        	<span class="price-new"><?php echo $special; ?></span>
        	<?php } ?>
        </div>
        <?php if ($tax) { ?>
        <div class="txt-price-tax">
        	<span class="price-tax"><?php echo $text_tax; ?></span>
        	<span class="price-tax"><?php echo $tax; ?></span>
        </div>
        <?php } ?>
        <?php if ($points) { ?>
        <span class="reward"><small><?php echo $text_points; ?> <?php echo $points; ?></small></span>
        <?php } ?>
        <?php if ($discounts) { ?>
        
        <div class="discount">
          <?php foreach ($discounts as $discount) { ?>
          <?php echo sprintf($text_discount, $discount['quantity'], $discount['price']); ?>
          <?php } ?>
        </div>
        <?php } ?>
      </div>
      <?php } ?>
      <?php if ($profiles): ?>
      <div class="option">
          <h3><span class="required">*</span><?php echo $text_payment_profile ?></h3>
          
          <select name="profile_id">
              <option value=""><?php echo $text_select; ?></option>
              <?php foreach ($profiles as $profile): ?>
              <option value="<?php echo $profile['profile_id'] ?>"><?php echo $profile['name'] ?></option>
              <?php endforeach; ?>
          </select>
          
          
          <span id="profile-description"></span>
          
          
      </div>
      <?php endif; ?>
      <?php if ($options) { ?>
      <div class="options">
        <!-- <h3><?php echo $text_option; ?></h3> -->
        
        <?php foreach ($options as $option) { ?>
        <?php if ($option['type'] == 'select') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <select name="option[<?php echo $option['product_option_id']; ?>]">
            <option value=""><?php echo $text_select; ?></option>
            <?php foreach ($option['option_value'] as $option_value) { ?>
            <option value="<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
            <?php if ($option_value['price']) { ?>
            (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
            <?php } ?>
            </option>
            <?php } ?>
          </select>
        </div>
        
        <?php } ?>
        <?php if ($option['type'] == 'radio') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <?php foreach ($option['option_value'] as $option_value) { ?>
          <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" id="option-value-<?php echo $option_value['product_option_value_id']; ?>" />
          <label for="option-value-<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
            <?php if ($option_value['price']) { ?>
            (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
            <?php } ?>
          </label>
          
          <?php } ?>
        </div>
        
        <?php } ?>
        <?php if ($option['type'] == 'checkbox') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <?php foreach ($option['option_value'] as $option_value) { ?>
          <input type="checkbox" name="option[<?php echo $option['product_option_id']; ?>][]" value="<?php echo $option_value['product_option_value_id']; ?>" id="option-value-<?php echo $option_value['product_option_value_id']; ?>" />
          <label for="option-value-<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
            <?php if ($option_value['price']) { ?>
            (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
            <?php } ?>
          </label>
          
          <?php } ?>
        </div>
        
        <?php } ?>
        <?php if ($option['type'] == 'image') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <table class="option-image">
            <?php foreach ($option['option_value'] as $option_value) { ?>
            <tr>
              <td style="width: 1px;"><input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" id="option-value-<?php echo $option_value['product_option_value_id']; ?>" /></td>
              <td><label for="option-value-<?php echo $option_value['product_option_value_id']; ?>"><img class="img-thumbnail" src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" /></label></td>
              <td><label for="option-value-<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                  <?php if ($option_value['price']) { ?>
                  (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                  <?php } ?>
                </label></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        
        <?php } ?>
        <?php if ($option['type'] == 'text') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['option_value']; ?>" />
        </div>
        
        <?php } ?>
        <?php if ($option['type'] == 'textarea') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <textarea name="option[<?php echo $option['product_option_id']; ?>]" cols="40" rows="5"><?php echo $option['option_value']; ?></textarea>
        </div>
        <?php } ?>
        <?php if ($option['type'] == 'file') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <input type="button" value="<?php echo $button_upload; ?>" id="button-option-<?php echo $option['product_option_id']; ?>" class="btn btn-primary btn-sm">
          <input type="hidden" name="option[<?php echo $option['product_option_id']; ?>]" value="" />
        </div>
        <?php } ?>
        <?php if ($option['type'] == 'date') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['option_value']; ?>" class="date" />
        </div>
        <?php } ?>
        <?php if ($option['type'] == 'datetime') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['option_value']; ?>" class="datetime" />
        </div>
        <?php } ?>
        <?php if ($option['type'] == 'time') { ?>
        <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
          <?php if ($option['required']) { ?>
          <span class="required">*</span>
          <?php } ?>
          <b><?php echo $option['name']; ?>:</b>
          <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['option_value']; ?>" class="time" />
        </div>
        <?php } ?>
        <?php } ?>
      </div>
      <?php } ?>
		<div class="cart form-inline">
			<div class="cart-group">
				<label for="quantity"><?php echo $text_qty; ?></label>
				<input type="text" class="form-control"  size="2" id="quantity" name="quantity" value="<?php echo $minimum; ?>"/>
				<input type="hidden" name="product_id" size="2" value="<?php echo $product_id; ?>" />
			</div>
		</div>
		<div class="button-group">
	  		<input type="button" value="<?php echo $button_cart; ?>" id="button-cart" class="btn btn-primary btn-sm" />
	  		<a class="btn btn-default btn-sm" addToWishList('<?php echo $product_id; ?>');"><?php echo $button_wishlist; ?></a>
			<a class="btn btn-default btn-sm" onclick="addToCompare('<?php echo $product_id; ?>');"><?php echo $button_compare; ?></a>
		</div>
		<?php if ($minimum > 1) { ?>
		<div class="button-group">
			<div class="minimum"><?php echo $text_minimum; ?></div>
		</div>
		<?php } ?>
		 
      <?php if ($review_status) { ?>
      <div class="review">
      	<h3>Product Reviews</h3>
        <div class="ratings">
        	<img class="img-thumbnail" src="catalog/view/theme/default/image/stars-<?php echo $rating; ?>.png" alt="<?php echo $reviews; ?>" />
        	<a onclick="$('a[href=\'#tab-review\']').trigger('click');"><span><?php echo $reviews; ?></span></a>
        	<a onclick="$('a[href=\'#tab-review\']').trigger('click');"><span><?php echo $text_write; ?></span></a>
        </div>
        <div class="share"><!-- AddThis Button BEGIN -->
          <div class="addthis_default_style"><a class="addthis_button_compact"><?php echo $text_share; ?></a> <a class="addthis_button_email"></a><a class="addthis_button_print"></a> <a class="addthis_button_facebook"></a> <a class="addthis_button_twitter"></a></div>
          <script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js"></script> 
          <!-- AddThis Button END --> 
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="product-tabs row">
  	<div class="col-md-12">
	  <ul id="tabs" class="nav nav-tabs htabs">
	  	<li class="active"><a href="#tab-description" data-toggle="tab"><?php echo $tab_description; ?></a></li>
	    <?php if ($attribute_groups) { ?>
	    	<li><a href="#tab-attribute" data-toggle="tab"><?php echo $tab_attribute; ?></a></li>
	    <?php } ?>
	    <?php if ($review_status) { ?>
	    	<li><a href="#tab-review" data-toggle="tab"><?php echo $tab_review; ?></a></li>
	    <?php } ?>
	    <?php if ($products) { ?>
	    	<li><a href="#tab-related" data-toggle="tab"><?php echo $tab_related; ?> (<?php echo count($products); ?>)</a></li>
	    <?php } ?>
	  </ul>
	  <div class="tab-content">
	  <div id="tab-description" class="tab-pane active"><?php echo $description; ?></div>
	  
	  <?php if ($attribute_groups) { ?>
	  <div id="tab-attribute" class="tab-pane">
	    <table class="attribute">
	      <?php foreach ($attribute_groups as $attribute_group) { ?>
	      <thead>
	        <tr>
	          <td colspan="2"><?php echo $attribute_group['name']; ?></td>
	        </tr>
	      </thead>
	      <tbody>
	        <?php foreach ($attribute_group['attribute'] as $attribute) { ?>
	        <tr>
	          <td><?php echo $attribute['name']; ?></td>
	          <td><?php echo $attribute['text']; ?></td>
	        </tr>
	        <?php } ?>
	      </tbody>
	      <?php } ?>
	    </table>
	  </div>
	  <?php } ?>
	  <?php if ($review_status) { ?>
	  <div id="tab-review" class="tab-pane">
		<div id="review"></div>
	    <h2 id="review-title"><?php echo $text_write; ?></h2>
	    <div class="form-group">
	    	<label><?php echo $entry_name; ?></label>
	    	<input type="text" name="name" value="" style="width: 50%;" class="form-control"/>
	    </div>
	    <div class="form-group">
	    	<label><?php echo $entry_review; ?></label>
	    	<textarea name="text" cols="40" rows="8" style="width: 98%;" class="form-control"></textarea>
	    	<span style="font-size: 11px;"><?php echo $text_note; ?></span>
	    </div>
	    <div class="form-group">
	    <label><?php echo $entry_rating; ?></label> 
	    <span><?php echo $entry_bad; ?></span>&nbsp;
	    <input type="radio" name="rating" value="1" />
	    &nbsp;
	    <input type="radio" name="rating" value="2" />
	    &nbsp;
	    <input type="radio" name="rating" value="3" />
	    &nbsp;
	    <input type="radio" name="rating" value="4" />
	    &nbsp;
	    <input type="radio" name="rating" value="5" />
	    &nbsp;<span><?php echo $entry_good; ?></span>
	    </div>
	    <p></p>
	    <div class="form-group">
	    	<label><?php echo $entry_captcha; ?></label>
	    	<p><img src="index.php?route=product/product/captcha" alt="" id="captcha" /></p>
		    <input type="text" name="captcha" value="" style="width: 150px;" class="form-control"/>
	    </div>
	    <div class="buttons">
	      <div class="right"><a id="button-review" class="btn btn-primary btn-sm"><?php echo $button_continue; ?></a></div>
	    </div>
	  </div>
	  <?php } ?>
	  <?php if ($products) { ?>
	  <div id="tab-related" class="tab-pane">
	    <div class="box-product">
	      <?php foreach ($products as $product) { ?>
	      <div>
	        <?php if ($product['thumb']) { ?>
	        <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" class="img-thumbnail" /></a></div>
	        <?php } ?>
	        <div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
	        <?php if ($product['price']) { ?>
	        <div class="price">
	          <?php if (!$product['special']) { ?>
	          <?php echo $product['price']; ?>
	          <?php } else { ?>
	          <span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
	          <?php } ?>
	        </div>
	        <?php } ?>
	        <?php if ($product['rating']) { ?>
	        <div class="rating"><img src="catalog/view/theme/default/image/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" class="img-thumbnail" /></div>
	        <?php } ?>
	        <a onclick="addToCart('<?php echo $product['product_id']; ?>');" class="btn btn-primary btn-sm"><?php echo $button_cart; ?></a></div>
	      <?php } ?>
	    </div>
	  </div>
	  <?php } ?>
	  <?php if ($tags) { ?>
	  <div class="tags" class="tab-pane"><b><?php echo $text_tags; ?></b>
	    <?php for ($i = 0; $i < count($tags); $i++) { ?>
	    <?php if ($i < (count($tags) - 1)) { ?>
	    <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>,
	    <?php } else { ?>
	    <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>
	    <?php } ?>
	    <?php } ?>
	  </div>
	  <?php } ?>
	  </div>
  	</div>
  </div>
  <?php echo $content_bottom; ?></div>
<script type="text/javascript"><!--
$(document).ready(function() {
	$('.colorbox').colorbox({
		overlayClose: true,
		opacity: 0.5,
		rel: "colorbox"
	});
});
//--></script> 
<script type="text/javascript"><!--

$('select[name="profile_id"], input[name="quantity"]').change(function(){
    $.ajax({
		url: 'index.php?route=product/product/getRecurringDescription',
		type: 'post',
		data: $('input[name="product_id"], input[name="quantity"], select[name="profile_id"]'),
		dataType: 'json',
        beforeSend: function() {
            $('#profile-description').html('');
        },
		success: function(json) {
			$('.success, .warning, .attention, information, .error').remove();
            
			if (json['success']) {
                $('#profile-description').html(json['success']);
			}	
		}
	});
});
    
$('#button-cart').bind('click', function() {
	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
		dataType: 'json',
		success: function(json) {
			$('.success, .warning, .attention, information, .error').remove();
			
			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						$('#option-' + i).after('<span class="error">' + json['error']['option'][i] + '</span>');
					}
				}
                
                if (json['error']['profile']) {
                    $('select[name="profile_id"]').after('<span class="error">' + json['error']['profile'] + '</span>');
                }
			} 
			
			if (json['success']) {
				$('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
					
				$('.success').fadeIn('slow');
					
				$('#cart-total').html(json['total']);
				
				$('html, body').animate({ scrollTop: 0 }, 'slow'); 
			}	
		}
	});
});
//--></script>
<?php if ($options) { ?>
<script type="text/javascript" src="catalog/view/javascript/jquery/ajaxupload.js"></script>
<?php foreach ($options as $option) { ?>
<?php if ($option['type'] == 'file') { ?>
<script type="text/javascript"><!--
new AjaxUpload('#button-option-<?php echo $option['product_option_id']; ?>', {
	action: 'index.php?route=product/product/upload',
	name: 'file',
	autoSubmit: true,
	responseType: 'json',
	onSubmit: function(file, extension) {
		$('#button-option-<?php echo $option['product_option_id']; ?>').after('<img src="catalog/view/theme/default/image/loading.gif" class="loading" style="padding-left: 5px;" />');
		$('#button-option-<?php echo $option['product_option_id']; ?>').attr('disabled', true);
	},
	onComplete: function(file, json) {
		$('#button-option-<?php echo $option['product_option_id']; ?>').attr('disabled', false);
		
		$('.error').remove();
		
		if (json['success']) {
			alert(json['success']);
			
			$('input[name=\'option[<?php echo $option['product_option_id']; ?>]\']').attr('value', json['file']);
		}
		
		if (json['error']) {
			$('#option-<?php echo $option['product_option_id']; ?>').after('<span class="error">' + json['error'] + '</span>');
		}
		
		$('.loading').remove();	
	}
});
//--></script>
<?php } ?>
<?php } ?>
<?php } ?>
<script type="text/javascript"><!--
$('#review .pagination a').live('click', function() {
	$('#review').fadeOut('slow');
		
	$('#review').load(this.href);
	
	$('#review').fadeIn('slow');
	
	return false;
});			

$('#review').load('index.php?route=product/product/review&product_id=<?php echo $product_id; ?>');

$('#button-review').bind('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=<?php echo $product_id; ?>',
		type: 'post',
		dataType: 'json',
		data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : '') + '&captcha=' + encodeURIComponent($('input[name=\'captcha\']').val()),
		beforeSend: function() {
			$('.success, .warning').remove();
			$('#button-review').attr('disabled', true);
			$('#review-title').after('<div class="attention"><img src="catalog/view/theme/default/image/loading.gif" alt="" /> <?php echo $text_wait; ?></div>');
		},
		complete: function() {
			$('#button-review').attr('disabled', false);
			$('.attention').remove();
		},
		success: function(data) {
			if (data['error']) {
				$('#review-title').after('<div class="warning">' + data['error'] + '</div>');
			}
			
			if (data['success']) {
				$('#review-title').after('<div class="success">' + data['success'] + '</div>');
								
				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').attr('checked', '');
				$('input[name=\'captcha\']').val('');
			}
		}
	});
});
//--></script> 
<script type="text/javascript"><!--
$('#tabs a').tabs();
//--></script> 
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-timepicker-addon.js"></script> 
<script type="text/javascript"><!--
$(document).ready(function() {
	if ($.browser.msie && $.browser.version == 6) {
		$('.date, .datetime, .time').bgIframe();
	}

	$('.date').datepicker({dateFormat: 'yy-mm-dd'});
	$('.datetime').datetimepicker({
		dateFormat: 'yy-mm-dd',
		timeFormat: 'h:m'
	});
	$('.time').timepicker({timeFormat: 'h:m'});
});
//--></script> 
<?php echo $column_right; ?>
</div>
<?php echo $footer; ?>