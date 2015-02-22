<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <?php 
        $slides = get_field('slides');
        foreach ($slides as $slide):
    ?>
    <li><img src="<?php echo($slide['slide']['url']); ?>"/></li>
    <?php endforeach; ?>
    
</ul>
<div class="shadow"></div>
<div class="row">
    <div class="col-md-6 col-md-offset-5 col-sm-offset-6 col-sm-6 team-col fixed-col">
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <div class="row">
        	<div class="col-sm-12">
                <div class="extra-pad">
        		<a class="team-back pull-right btn-close" href="<?php bloginfo('url'); ?>/about/meet-our-team">
        			<img src="<?php bloginfo('template_url'); ?>/assets/img/btn-close.png" alt="close">
        		</a>
                </div>
        	</div>
        </div>
        <?php if($image = get_field('wide_headshot')): ?>
           
        <div class="row team-img-lg text-center">
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
</div>