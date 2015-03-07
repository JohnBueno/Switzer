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
                
                if ( $query->have_posts() ):
                    while ( $query->have_posts() ):
                    $query->the_post();
                    $image = get_field('headshot');
            ?>

            <div class="col-md-3 col-sm-3 col-xs-6 headshot headshot-<?php echo($i); ?>"> 
            
                <div class="bg">
                    <a href="<? the_permalink(); ?>">
                    <img class="img-responsive" src="<?php echo($image['sizes']['team']); ?>" alt="<?php the_title(); ?>">
                    <span class="name">
                        <h4><?php the_title(); ?></h4>
                        <h4><?php the_field('job_title'); ?></h4>
                    </span>
                    </a>
                </div>

            </div>
            <?php 
                if(get_field("placeholder")): 
                for ($x = 0; $x < get_field("number_of_placeholders"); $x++):
            ?>
                <div class="col-md-3 col-sm-3 col-xs-6 headshot blank"> 
                    <img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/blank-team.gif" alt="">
                </div>
                
            <?php 
                endfor;
                endif; 
            ?>
            

            <?php
                    endwhile;
                endif;
                // Restore original Post Data
                wp_reset_postdata();
            ?>

        </div>
    </div>
	
	
	



