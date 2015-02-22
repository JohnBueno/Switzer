<?php
/*
Template Name: Team Template
*/
?>
<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <?php 
        $slides = get_field('slides');
        foreach ($slides as $slide):
    ?>
    <li><img src="<?php echo($slide['slide']['url']); ?>"/></li>
    <?php endforeach; ?>
    
</ul>
<div class="shadow"></div>
	<?php while (have_posts()) : the_post(); ?>
    
        <div class="col-md-5 col-xs-12 col-md-offset-6 col-sm-offset-6 col-sm-6">
            <div class="extra-pad">
                <div class="page-header">
                    <div class="breadcrumbs">
                        <?php the_breadcrumb(); ?>
                    </div>
                </div>
            </div>
        </div>
    ]
                
	<?php get_template_part('templates/content', 'team'); ?>
  		
	<?php endwhile; ?>
</div>

