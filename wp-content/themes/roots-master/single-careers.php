
<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" alt="image01"/></li>
</ul>
<div class="shadow"></div>
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 single-col fixed-col">
            <div class="extra-pad">
               <?php get_template_part('templates/careers', 'header'); ?>
               <?php get_template_part('templates/content', 'single-careers'); ?>
            </div>
        </div>

    <?php endwhile; ?>
</div>

