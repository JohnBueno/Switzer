<div class="col-md-12 category-thumbs">

	<?php 
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;

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
		
	<?php the_title(); ?>

	<?php
			endwhile;
		endif;
		// Restore original Post Data
		wp_reset_postdata();
	?>
</div>
