<?php
/*
Template Name: About Template
*/
?>
<ul id="cbp-bislideshow" class="cbp-bislideshow">
	<li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" alt="image01"/></li>
</ul>
<div class="col-md-4 col-md-offset-6">
	<?php while (have_posts()) : the_post(); ?>
  		<?php get_template_part('templates/page', 'header'); ?>
  		<?php get_template_part('templates/content', 'about'); ?>
	<?php endwhile; ?>
</div>
