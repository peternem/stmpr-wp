<div class="panel panel-default">
	<div class="panel-heading"><b><?php echo $heading_title; ?></b></div>
	<ul class="list-group">
		<?php foreach ($categories as $category) { ?>
			<li class="list-group-item">
			<?php if ($category['category_id'] == $category_id) { ?>
				<a href="<?php echo $category['href']; ?>" class="active"><?php echo $category['name']; ?></a>
			<?php } else { ?>
				<a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
			<?php } ?>
			<?php if ($category['children']) { ?>
				<ul>
			  		<?php foreach ($category['children'] as $child) { ?>
					<li>
					<?php if ($child['category_id'] == $child_id) { ?>
					<a href="<?php echo $child['href']; ?>" class="active"> - <?php echo $child['name']; ?></a>
					<?php } else { ?>
					<a href="<?php echo $child['href']; ?>"> - <?php echo $child['name']; ?></a>
					<?php } ?>
					</li>
					<?php } ?>
				</ul>
			<?php } ?>
			</li>
		<?php } ?>
	</ul>
</div>
