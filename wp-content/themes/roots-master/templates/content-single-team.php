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
	      <p>
	      	<a href="<?php bloginfo('url'); ?>/about/meet-our-team">
	      		<strong><i class="fa fa-caret-right"></i> Back to All Team Members</strong>
	      	</a>
	      </p>
	      <p>
				<?php // next_post_link( $format, $link, $in_same_term = false, $excluded_terms = '' ); ?>
				<!-- <a href="<?php next_post_link( $format, $link, $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ); ?>">
	      		<strong><i class="fa fa-caret-right"></i> View Next Team Member</strong>
	      	</a> -->
	      </p>
	    </div>
  </article>
<?php endwhile; ?>
</div>