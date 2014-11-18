<?php
/*
Template Name: Contact Template
*/
?>
<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" alt="image01"/></li>
</ul>
<div class="shadow"></div>
<div class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 single-col fixed-col page">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
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
        <div class="col-sm-12">
            <a href="<?php the_field('google_maps_link'); ?>">
                <i class="fa fa-caret-right"></i>
                Map & Directions via Google Maps
            </a>
            
        </div>
    </div>
<?php endif; ?>

<?php endwhile; ?>

</div>
