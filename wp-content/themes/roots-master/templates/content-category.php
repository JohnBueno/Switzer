<?php 
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
?>

<div class="col-md-12 category-thumbs">
	<div class="row">
		<div class="col-md-3 col-sm-4 category-title">
			<img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/category-title-bg.gif" alt="<?php echo roots_title(); ?>">
			<h4><?php echo roots_title(); ?></h4>
		</div>
	
		<?php 
			$args = array (
				'post_type'	=> 'portfolio',
				'cat' => $category_id
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ):
				while ( $query->have_posts() ):
					$query->the_post();
		?>						
					
		<div class="col-md-3 col-sm-4">
			<div class="bg">
				<a href="<?php the_permalink(); ?>">
					<?php if ($image = get_field('thumb')): ?>
						<img class="img-responsive" src="<?php echo($image['sizes']['portfolio-thumbail']); ?>" alt="<?php the_title(); ?>">
					<?php else: ?>				
						<img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/category-title-bg.gif" alt="">
					<?php endif; ?>
					<h4><?php the_title(); ?></h4>
				</a>
			</div>
		</div>

		<?php
			endwhile;
			endif;
			wp_reset_postdata();
		?>
	</div>
</div>
