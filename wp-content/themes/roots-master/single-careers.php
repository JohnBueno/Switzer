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
        <div style="min-height:700px;" class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 white-bg">
            <div class="extra-pad">
               <?php get_template_part('templates/careers', 'header'); ?>
               <?php get_template_part('templates/content', 'single-careers'); ?>
            </div>
        </div>

    <?php endwhile; ?>
</div>

