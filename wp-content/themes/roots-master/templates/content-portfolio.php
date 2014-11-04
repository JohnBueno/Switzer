<div class="col-md-12">
	<?php the_content(); ?>
	<?php 
	 	$args = array(
			'type' => 'portfolio',
			'exclude' => 1
		);
	 	$categories = get_categories($args);

	?> 
	<div class="row">
		<?php foreach ($categories as $c): ?>
			<div class="col-md-3">
				<?php  if (function_exists('z_taxonomy_image_url')): ?>
					<img class="img-responsive" src="<?php echo z_taxonomy_image_url($c->cat_ID); ?>" alt="<?php echo($c->name); ?>">
					
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>	

</div>
