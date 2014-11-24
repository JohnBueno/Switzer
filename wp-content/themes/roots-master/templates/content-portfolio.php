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
			<div class="col-md-3 col-sm-4">
				
				<div class="bg">
					<a href="<?php echo(get_category_link($c->cat_ID)); ?>">
                        <?php if ($image = get_field('category_image', $c->taxonomy . '_' . $c->term_id)): ?>
                            <img class="img-responsive" src="<?php echo($image['sizes']['portfolio-thumbail']); ?>" alt="<?php the_title(); ?>">
                        <?php else: ?>              
                            <img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/category-title-bg.gif" alt="">
                        <?php endif; ?>

                        <h4><?php echo($c->name); ?></h4>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>	
</div>
