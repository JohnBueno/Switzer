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
				<?php $image = get_field('category_image', $c->taxonomy . '_' . $c->term_id); ?>
				<div class="bg">
					<a href="<?php echo(get_category_link($c->cat_ID)); ?>">
						<img class="img-responsive" src="<?php echo($image['sizes']['portfolio-thumbail']); ?>" alt="">
						<h4><?php echo($c->name); ?></h4>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>	
</div>