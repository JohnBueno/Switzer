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

<?php while (have_posts()) : the_post(); ?>
    <div class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 white-bg page">
        <div class="extra-pad">
            <?php get_template_part('templates/page', 'header'); ?>
        </div>
    </div>
    <div class="row mobile-img">
        <img  class="img-responsive" src="<?php echo($slides[0]['slide']['sizes']['large']); ?>" alt="<?php the_title(); ?>">
    </div>
    <div style="min-height:500px;" class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 white-bg page">
        <div class="extra-pad">
            <?php get_template_part('templates/content', 'careers'); ?>
        </div>
    </div>
<?php endwhile; ?>
