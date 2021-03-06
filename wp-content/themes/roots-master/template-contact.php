<?php
/*
Template Name: Contact Template
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
<div class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 white-bg page">
    <div class="extra-pad">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('templates/page', 'header'); ?>
    </div>
</div>
<div class="row mobile-img">
    <img  class="img-responsive" src="<?php echo($slides[0]['slide']['sizes']['large']); ?>" alt="<?php the_title(); ?>">
</div>
<div class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 white-bg page min-height">
    <div class="extra-pad">
          <?php get_template_part('templates/content', 'page'); ?>


        <hr>
        <h5>Contact Information</h5>
        <div class="row">
            <div class="col-sm-6">
                <strong>Tel:</strong>
                <?php the_field('telephone'); ?> <br>
                <strong>Fax:</strong>
                <?php the_field('fax'); ?> <br>
                <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
            </div>
            <div class="col-sm-6">
                <?php the_field('address'); ?> <br>
            </div>
        </div>
        <br>
        <?php if ($maplink = get_field('google_maps_link')): ?>
            <div class="row">
                <div class="col-sm-7">
                    <a target="_blank" href="<?php the_field('google_maps_link'); ?>">
                        <i class="fa fa-caret-right"></i>
                        Map & Directions via Google Maps
                    </a>
                </div>
                <div class="col-sm-5 social text-right">
                    <a href="https://www.linkedin.com/company/the-switzer-group"><i class="fa fa-linkedin-square"></i></a>
                </div>
            </div>
        <?php endif; ?>

        <?php endwhile; ?>
    </div>
</div>
