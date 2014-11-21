<?php
/*
Template Name: Careers Template
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
<div class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 single-col fixed-col page">
    <div class="extra-pad">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/careers', 'header'); ?>
            <?php get_template_part('templates/content', 'careers'); ?>
        <?php endwhile; ?>
    </div>
</div>