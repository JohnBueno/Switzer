<ul id="cbp-bislideshow" class="cbp-bislideshow">
	<li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" alt="image01"/></li>
</ul>
<div class="shadow"></div>

<div class="col-md-6 col-md-offset-5 col-sm-offset-6 col-sm-6 team-col fixed-col">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="row">
    	<div class="col-sm-12">
    		<a class="team-back pull-right" href="<?php bloginfo('url'); ?>/about/meet-our-team">
    			<i class="fa fa-times"></i>
    		</a>
    	</div>
    </div>
    <?php if($image = get_field('wide_headshot')): ?>
        
    <div class="row team-img-lg">
    	<img class="img-responsive" src="<?php echo($image['sizes']['team-wide']); ?>" alt="<?php the_title(); ?>">
    </div>
    <?php endif; ?>

	    <header>
	      <div class="extra-pad"><h4 class="entry-title"><?php the_title(); ?></h4></div>
	    </header>
	    <div class="entry-content">
	      <div class="extra-pad">
              <?php the_content(); ?>
    	      <p>
    	      	<a href="<?php bloginfo('url'); ?>/about/meet-our-team">
    	      		<strong><i class="fa fa-caret-right"></i> Back to All Team Members</strong>
    	      	</a>
    	      </p>
    	      <p>
    				
                    <?php c2c_next_or_loop_post_link($format='<strong><i class="fa fa-caret-right"></i> %link</strong>', $link='View Next Team Member'); ?><br/>
    <!-- 				<a href="<?php next_post_link( $format, $link, $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ); ?>">
    	      		   <strong><i class="fa fa-caret-right"></i> View Next Team Member</strong>
    	      	    </a> -->
    	      </p>
          </div>
	    </div>
  </article>
<?php endwhile; ?>
</div>