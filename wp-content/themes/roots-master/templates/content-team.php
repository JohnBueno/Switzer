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
        $i = 1;
		if ( $query->have_posts() ):
			while ( $query->have_posts() ):
				$query->the_post();
	?>
	<?php $image = get_field('headshot'); ?>


	<div class="col-md-4 col-sm-6 col-xs-6 headshot headshot-<?php echo($i); ?>"> 
		<a href="<? the_permalink(); ?>">
		<img class="img-responsive" src="<?php echo($image['sizes']['portfolio-thumbail']); ?>" alt="<?php the_title(); ?>">
		<span class="name">
			<h4><?php the_title(); ?></h4>
			<small><?php the_field('job_title'); ?></small>
		</span>
		</a>
    </div>
	
	<?php
            $i++;
			endwhile;
		endif;
		// Restore original Post Data
		wp_reset_postdata();
	?>

</div>


