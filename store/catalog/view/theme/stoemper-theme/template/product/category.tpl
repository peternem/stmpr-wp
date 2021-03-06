<?php echo $header; ?>
<div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
</div>
<div class="row">
	<?php echo $content_top; ?>
<?php if(!$column_left) {  ?>
	<?php echo $column_left; ?>
	<div id="content" class="col-md-8">
<?php } else { ?>
	<div id="content" class="col-md-12">
<?php } ?>
	<div class="category-info row">
  		<?php if ($thumb || $description) { ?>
    		<?php if ($description) { ?>
    			<div class="col-md-8">
    				<h1 class="category-h1"><?php echo $heading_title; ?></h1>
    				<?php echo $description; ?>
    			</div>
    		<?php } ?>
    		<?php if ($thumb) { ?>
    			<div class="col-md-4 image">
    				<img class="img-thumbnail" src="<?php echo $thumb; ?>" alt="<?php echo $heading_title; ?>" />
    			</div>
			<?php } ?>
  		
  		<?php } else { ?>
			<div class="col-md-8">
				<h1 class="category-h1"><?php echo $heading_title; ?></h1>
			</div>
		<? } ?>
	</div>
  <?php if ($categories) { ?>
  <h2><?php echo $text_refine; ?></h2>
  <div class="category-list">
    <?php if (count($categories) <= 5) { ?>
    <ul>
      <?php foreach ($categories as $category) { ?>
      <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
      <?php } ?>
    </ul>
    <?php } else { ?>
    <?php for ($i = 0; $i < count($categories);) { ?>
    <ul>
      <?php $j = $i + ceil(count($categories) / 4); ?>
      <?php for (; $i < $j; $i++) { ?>
      <?php if (isset($categories[$i])) { ?>
      <li><a href="<?php echo $categories[$i]['href']; ?>"><?php echo $categories[$i]['name']; ?></a></li>
      <?php } ?>
      <?php } ?>
    </ul>
    <?php } ?>
    <?php } ?>
  </div>
  <?php } ?>
  <?php if ($products) { ?>
  <div class="product-filter">
    <!-- <div class="display"><b><?php echo $text_display; ?></b> <?php echo $text_list; ?> <b>/</b> <a onclick="display('grid');"><?php echo $text_grid; ?></a></div> -->
   <!-- <div class="limit"><b><?php echo $text_limit; ?></b>
      <select onchange="location = this.value;">
        <?php foreach ($limits as $limits) { ?>
        <?php if ($limits['value'] == $limit) { ?>
        <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
        <?php } else { ?>
        <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
        <?php } ?>
        <?php } ?>
      </select>
    </div>-->
    <!--  <div class="sort"><b><?php echo $text_sort; ?></b>
      <select onchange="location = this.value;">
        <?php foreach ($sorts as $sorts) { ?>
        <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
        <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
        <?php } else { ?>
        <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
        <?php } ?>
        <?php } ?>
      </select>
    </div>-->
	</div>
	<div class="product-list">
    	<?php foreach ($products as $product) { ?>
    	<div class="row">
      		<?php if ($product['thumb']) { ?>
     			<div class="col-xs-12 col-sm-3 col-md-3 image-col">
     				<a href="<?php echo $product['href']; ?>">
     					<img class="img-thumbnail" src="<?php echo $product['thumb']; ?>" title="<?php echo $product['name']; ?>" alt="<?php echo $product['name']; ?>" />
     				</a>
     			</div>
      		<?php } ?>
      		
      		<div class="col-xs-12 col-sm-3 col-md-3 item-col">
      			<div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
      			<div class="description"><?php echo $product['description']; ?></div>
      		</div>
      		
      		<?php if ($product['price']) { ?>
      		<div class="col-xs-12 col-sm-3 col-md-3 price-col">	
        		<?php if (!$product['special']) { ?>
        		<?php echo $product['price']; ?>
        		<?php } else { ?>
        		<span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
        		<?php } ?>
        		
        		<?php if ($product['tax']) { ?>
        		<br />
        		<span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
       			<?php } ?>
       			<?php if ($product['rating']) { ?>
      			<div class="rating"><img class="img-thumbnail" src="catalog/view/theme/default/image/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></div>
      			<?php } ?>
      		</div>
      		<?php } ?>
      		<div class="col-xs-12 col-sm-3 col-md-3 cart-col">
				<div class="cart">
			    	<input type="button" value="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');" class="btn btn-primary btn-sm" />
			    </div>
				<div class="wishlist"><a class="btn btn-default btn-sm" onclick="addToWishList('<?php echo $product['product_id']; ?>');"><?php echo $button_wishlist; ?></a></div>
				<div class="compare"><a class="btn btn-default btn-sm"onclick="addToCompare('<?php echo $product['product_id']; ?>');"><?php echo $button_compare; ?></a></div>
			</div>
    	</div>
    <?php } ?>
  </div>
  <div class="pagination"><?php echo $pagination; ?></div>
  <div class="product-compare">
		<a href="<?php echo $compare; ?>" id="compare-total">
			<?php echo $text_compare; ?>
		</a>
	</div>
  <?php } ?>
  <?php if (!$categories && !$products) { ?>
  <div class="content"><?php echo $text_empty; ?></div>
  <div class="buttons">
    <div class="right"><a href="<?php echo $continue; ?>" class="btn btn-primary btn-sm"><?php echo $button_continue; ?></a></div>
  </div>
  <?php } ?>
  <?php //echo $content_bottom; ?></div>
  
<?php echo $column_right; ?>
</div>
<?php echo $footer; ?>