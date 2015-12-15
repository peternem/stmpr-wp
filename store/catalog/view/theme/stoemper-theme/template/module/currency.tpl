<?php if (count($currencies) > 1) { ?>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
  	<!-- <div id="currency" class="currency_wrapper">
  		<div class="currency"><?php echo $text_currency; ?>:</div>
  		<div class="currency">
	    <?php foreach ($currencies as $currency) { ?>
	    <?php if ($currency['code'] == $currency_code) { ?>
	    <?php if ($currency['symbol_left']) { ?>
	    <a title="<?php echo $currency['title']; ?>"><b><?php echo $currency['symbol_left']; ?></b></a>
	    <?php } else { ?>
	    <a title="<?php echo $currency['title']; ?>"><b><?php echo $currency['symbol_right']; ?></b></a>
	    <?php } ?>
	    <?php } else { ?>
	    <?php if ($currency['symbol_left']) { ?>
	    <a title="<?php echo $currency['title']; ?>" onclick="$('input[name=\'currency_code\']').attr('value', '<?php echo $currency['code']; ?>'); $(this).parent().parent().parent().submit();"><?php echo $currency['symbol_left']; ?></a>
	    <?php } else { ?>
	    <a title="<?php echo $currency['title']; ?>" onclick="$('input[name=\'currency_code\']').attr('value', '<?php echo $currency['code']; ?>'); $(this).parent().parent().parent().submit();"><?php echo $currency['symbol_right']; ?></a>
	    <?php } ?>
	    <?php } ?>
	    <?php } ?>
	    <input type="hidden" name="currency_code" value="" />
	    <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
	    </div>
	</div> -->
	<!-- Single button -->
<div id="currency" class="btn-group currency-menu">
  <button id="myCurrency" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <?php echo $text_currency; ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <?php foreach ($currencies as $currency) { ?>
	    <?php if ($currency['code'] == $currency_code) { ?>
	    	<?php if ($currency['symbol_left']) { ?>
	    		<li><a title="<?php echo $currency['title']; ?>"><b><?php echo $currency['symbol_left']; ?> - <?php echo $currency['title']; ?></b></a></li>
	    	<?php } else { ?>
	    		<li><a title="<?php echo $currency['title']; ?>"><b><?php echo $currency['symbol_right']; ?> - <?php echo $currency['title']; ?></b></a></li>
	    	<?php } ?>
	    <?php } else { ?>
	    	<?php if ($currency['symbol_left']) { ?>
	   			<li><a title="<?php echo $currency['title']; ?>" onclick="$('input[name=\'currency_code\']').attr('value', '<?php echo $currency['code']; ?>'); $('input[name=\'currency_code\']').attr('value', '<?php echo $currency['code']; ?>'); $(this).parent().parent().parent().parent().submit();"><?php echo $currency['symbol_left']; ?> - <?php echo $currency['title']; ?></a></li>
	    	<?php } else { ?>
	   			<li><a title="<?php echo $currency['title']; ?>" onclick="$('input[name=\'currency_code\']').attr('value', '<?php echo $currency['code']; ?>'); $(this).parent().parent().parent().parent().submit();"><?php echo $currency['symbol_right']; ?> - <?php echo $currency['title']; ?></a></li>
	    	<?php } ?>
	    <?php } ?>
	 <?php } ?>
	<input type="hidden" name="currency_code" value="" />
	<input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
  </ul>
</div>
</form>
<?php } ?>
