	</div><!-- #content -->
</div><!-- #container -->
<footer id="footer" class="page-footer">
	<div class="container">
		<div class="row">
			<?php if ($informations) { ?>
			<div class="column col-sm-4 col-md-4">
				<h4><?php echo $text_information; ?></h4>
				<ul>
				  <?php foreach ($informations as $information) { ?>
				  <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
				  <?php } ?>
				</ul>
			</div>
			<?php } ?>
			<div class="column col-sm-4 col-md-4">
				<h4><?php echo $text_service; ?></h4>
				<ul>
				  <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
				  <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
				  <!-- <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li> -->
				</ul>
			</div>
			<div class="column col-sm-4 col-md-4">
				<h4><?php echo $text_account; ?></h4>
				<ul>
				  <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
				  <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
				  <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
				  <!-- <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li> -->
				</ul>
			</div>
		</div>
	</div>
	<div id="powered" class="container">
	<div class="row">
			<div class="col-md-12 text-center site-credits">
				<?php echo $powered; ?>
			</div>
		</div>
	</div>
</footer>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

</body></html>