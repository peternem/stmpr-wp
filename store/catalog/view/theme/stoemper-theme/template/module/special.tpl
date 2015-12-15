<div class="box specials">
	<div class="box-heading text-center">
		<h3><?php echo $heading_title; ?></h3>
	</div>
    <?php foreach ($products as $product) { ?>
	
	<div class="feature-content">
        	<?php if ($product['thumb']) { ?>
        	<div class="image">
        		<a href="<?php echo $product['href']; ?>">
        			<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" class="img-responsive" />
        		</a>
        	</div>
			<?php } ?>
       	 	<div class="name">
       	 		<a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
       	 	
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
	        <div class="rating">
	        	<img src="catalog/view/theme/default/image/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" />
	        </div>
	        <?php } ?>
        	<div class="cart">
        		<input type="button" value="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');" class="btn btn-primary btn-sm" />
        	</div>
     	</div>
     </div>
     <?php } ?>
</div>
