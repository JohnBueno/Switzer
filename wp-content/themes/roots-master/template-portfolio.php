<?php
/*
Template Name: Portfolio Template
*/
?>
<div class="portfolio-categories">
	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/fixed', 'header'); ?>
	  <?php get_template_part('templates/content', 'portfolio'); ?>
	<?php endwhile; ?>
</div>