<?php // the_content(); ?>
	<?php 
		// WP_Query arguments
		$args = array (
			'post_type'	=> 'team',
		);

		// The Query
		$query = new WP_Query( $args );

		
	?>

    <div class="col-xs-12">
        <div class="row team-imgs min-height">
            <?php 
                // The Loop
                $i = 1;
                if ( $query->have_posts() ):
                    while ( $query->have_posts() ):
                    $query->the_post();
                $image = get_field('headshot');
            ?>

            <div class="col-md-3 col-sm-3 headshot headshot-<?php echo($i); ?>"> 
            <?php if($i!=10): ?>
                <div class="bg">
                    <a href="<? the_permalink(); ?>">
                    <img class="img-responsive" src="<?php echo($image['sizes']['team']); ?>" alt="<?php the_title(); ?>">
                    <span class="name">
                        <h4><?php the_title(); ?></h4>
                        <h4><?php the_field('job_title'); ?></h4>
                    </span>
                    </a>
                </div>
            <?php else: ?>
                            <img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/blank-team.gif" alt="">
            <?php endif; ?>


            </div>
            <?php
            $i++;
                    endwhile;
                endif;
                // Restore original Post Data
                wp_reset_postdata();
            ?>

        </div>
    </div>
	
	
	



