<?php the_content(); ?>
<br>
<h4>Current Opportunities</h4>
<?php 
    $args = array (
        'post_type' => 'careers'
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ):
        while ( $query->have_posts() ):
            $query->the_post();
?>                      
            
        <div class="row career">
            <a href="<?php the_permalink(); ?>">
                <div class="col-xs-12">
                    <h5><?php the_title(); ?></h5>
                    <small>LEARN MORE</small>
                </div>
                
            </a>
        </div>


<?php
    endwhile;
    endif;
    wp_reset_postdata();
?>

