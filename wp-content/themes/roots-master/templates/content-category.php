
<div class="col-md-12 category-thumbs">

	<div class="row">
		<div class="col-md-3 col-sm-4 category-title">
            <div class="bg">
			<img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/blank.gif" alt="<?php echo roots_title(); ?>">
			<h4><?php echo roots_title(); ?></h4>
            </div>
		</div>

		<?php            

            $this_category = get_category($cat);
			$args = array (
				'post_type'	=> 'portfolio',
				'cat' => $this_category->cat_ID,
                'order' => ASC,
                'orderby' =>'title'
			);

			// The Query
			$query = new WP_Query( $args );
            $count = $query->post_count - 1;

			// The Loop
			if ( $query->have_posts() ):
                $i = 1;
				while ( $query->have_posts() ):
					$query->the_post();
		?>						

		<div class="col-md-3 col-sm-4">
			<div class="bg">
                
                <a href="<?php the_permalink(); ?>">
					<?php if ($image = get_field('thumb')): ?>
						<img class="img-responsive" src="<?php echo($image['sizes']['portfolio-thumbail']); ?>" alt="<?php the_title(); ?>">
					<?php else: ?>				
						<img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/blank.gif" alt="">
					<?php endif; ?>
					<h4><?php the_title(); ?></h4>
				</a>

			</div>
		</div>

		<?php
            $i++;
			endwhile;
			endif;
			wp_reset_postdata();
		?>
        <?php 
            $modBlanks = $count % 4; 
            
            if (($modBlanks + $count) < 7) {
                $modBlanks = $modBlanks +4;
            }

            for ($x = 0; $x < $modBlanks; $x++):
        ?>
            <div class="col-md-3 col-sm-4 blank">
                <img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/blank.gif" alt="">
            </div>
        <?php
            endfor; 
        ?>
	</div>
</div>
