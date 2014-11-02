<ul id="cbp-bislideshow" class="cbp-bislideshow">
	<li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" alt="image01"/></li>
</ul>


<div class="col-md-6 col-md-offset-4 team-col fixed-col">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="row">
    	<div class="col-sm-12">
    		<a class="team-back pull-right" href="<?php bloginfo('url'); ?>/about/meet-our-team">
    			<i class="fa fa-times"></i>
    		</a>
    	</div>
    </div>
    <div class="row team-img-lg">
    	<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/team-fpo-lg.jpg" alt="<?php the_title(); ?>">
    </div>

	    <header>
	      <h4 class="entry-title"><?php the_title(); ?></h4>
	    </header>
	    <div class="entry-content">
	      <?php the_content(); ?>
	    </div>
  </article>
<?php endwhile; ?>
</div>