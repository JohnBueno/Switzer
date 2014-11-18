<ul id="cbp-bislideshow" class="cbp-bislideshow">
	<li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" alt="image01"/></li>
</ul>
<div class="shadow"></div>
<div class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 single-col fixed-col page">
    <div class="extra-pad">
    	<?php while (have_posts()) : the_post(); ?>
      		<?php get_template_part('templates/page', 'header'); ?>
      		<?php get_template_part('templates/content', 'page'); ?>
    	<?php endwhile; ?>
    </div>
</div>