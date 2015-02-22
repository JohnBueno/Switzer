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
    <?php get_template_part('templates/fixed', 'header'); ?>
	<?php get_template_part('templates/content', 'team'); ?>
  		
	<?php endwhile; ?>
</div>

