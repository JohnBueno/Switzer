<ul id="cbp-bislideshow" class="cbp-bislideshow">
	<li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" alt="image01"/></li>
    <li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-2.jpg" alt="image01"/></li>
    <li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-3.jpg" alt="image01"/></li>
</ul>

<a class="portfolio-nav portfolio-prev" href="#">
    <i class="fa fa-chevron-left"></i>
</a>
<a class="portfolio-nav portfolio-next" href="#">
    <i class="fa fa-chevron-right"></i>
</a>

<div class="col-md-4 col-md-offset-6 single-portfolio">
	<?php get_template_part('templates/content', 'single'); ?>
</div>
