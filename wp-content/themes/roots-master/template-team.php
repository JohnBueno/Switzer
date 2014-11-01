<?php
/*
Template Name: Team Template
*/
?>
<ul id="cbp-bislideshow" class="cbp-bislideshow">
	<li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" alt="image01"/></li>
</ul>

	<?php while (have_posts()) : the_post(); ?>
		<div class="col-md-4 col-md-offset-6 single-col">
  			<?php get_template_part('templates/page', 'header'); ?>
  		</div>

		<div class="team-container col-md-6 col-md-offset-4">
			<?php get_template_part('templates/content', 'team'); ?>
		</div>
  		

		<div class="col-md-4 col-md-offset-6">
	  		<ul class="siblings">
			  <?php
			  $parent = $post->post_parent;
			  wp_list_pages("title_li=&child_of=$parent&show_date=modified
			  &date_format=$date_format"); ?>
			</ul>
		</div>
	<?php endwhile; ?>
</div>

