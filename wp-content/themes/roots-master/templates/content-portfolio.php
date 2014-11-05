<?php 
 	$args = array(
		'type' => 'portfolio',
		'exclude' => 1
	);
 	$categories = get_categories($args);
?>

<div class="col-md-12 category-thumbs">

	<div class="row">
		<?php foreach ($categories as $c): ?>
			<div class="col-md-3">
				<?php  if (function_exists('z_taxonomy_image_url')): ?>
					<div class="bg">
						<a href="<?php echo(get_category_link($c->cat_ID)); ?>">
							<img class="img-responsive" src="<?php echo z_taxonomy_image_url($c->cat_ID); ?>" alt="<?php echo($c->name); ?>">
						</a>
					</div>
					<h4><?php echo($c->name); ?></h4>

				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>	

</div>
