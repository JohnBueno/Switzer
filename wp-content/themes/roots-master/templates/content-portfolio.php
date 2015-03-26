<?php 
 	//$blanks = [1, 3, 8];
    //$blanks = array(1, 3, 8);
    $blanks = array();
    $args = array(
		'type' => 'portfolio',
		'exclude' => 1
	);
 	$categories = get_categories($args);
    $count = count($categories);
    $i = 0;
?>

<div class="col-md-12 category-thumbs min-height">
    <div class="row">
		<?php foreach ($categories as $c): ?>		
			<div class="col-md-3 col-sm-4 cat">
				
				<div class="bg">
                    <?php 
                        if(!$link = get_field('redirect_to_page', $c->taxonomy . '_' . $c->term_id)){
                            $link = get_category_link($c->cat_ID);
                        }
                    ?>
					<a href="<?php echo($link); ?>">
                        <?php if ($image = get_field('category_image', $c->taxonomy . '_' . $c->term_id)): ?>
                            <img class="img-responsive" src="<?php echo($image['sizes']['portfolio-thumbail']); ?>" alt="<?php the_title(); ?>">
                        <?php else: ?>              
                            <img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/blank.gif" alt="">
                        <?php endif; ?>

                        <h4><?php echo($c->name); ?></h4>
					</a>
				</div>
			</div>
		<?php 
        $i++;
        endforeach; ?>

        <?php 
            $roundUp = roundUpToAny($count, 4);
            $blanks = $roundUp - $count;
            
            if (($blanks + $count) < 8) {
                $blanks = $blanks +4;
            }
            for ($x = 0; $x < $blanks; $x++):
        ?>
            <div class="col-md-3 col-sm-4 blank">
                <img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/blank.gif" alt="">
            </div>
        <?php
            endfor; 
        ?>
	</div>	
</div>
