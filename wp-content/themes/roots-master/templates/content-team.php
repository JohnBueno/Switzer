<?php // the_content(); ?>
<div class="team-imgs">
	<?php 
		// WP_Query arguments
		$args = array (
			'post_type'		=> 'team',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ):
			while ( $query->have_posts() ):
				$query->the_post();
				// do something
	?>
		
		<div class="col-md-4 col-sm-6 headshot">
		<a href="<? the_permalink(); ?>">
		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/team-fpo.jpg" alt="">
		<span class="name">
			<h4><?php the_title(); ?></h4>
			<small><?php the_field('job_title'); ?></small>
		</span>
		</a>
	</div>
	
	<?php
			endwhile;
		endif;
		// Restore original Post Data
		wp_reset_postdata();
	?>

</div>


