<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <?php 
        $slides = get_field('slides');
        foreach ($slides as $slide):
    ?>
    <li><img src="<?php echo($slide['slide']['url']); ?>"/></li>
    <?php endforeach; ?>
    
</ul>
<div class="shadow"></div>

<div class="col-md-6 col-md-offset-5 col-sm-12 white-bg min-height">
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
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="extra-pad">
                            <?php if($image = get_field('headshot')): ?>
                            <div class="col-sm-6">
                                <img class="img-responsive" src="<?php echo($image['sizes']['large']); ?>" alt="<?php the_title(); ?>">
                            </div>
                        <?php endif; ?> 
                        <div class="col-sm-6 name">
                            <h4 class="entry-title cap"><?php the_title(); ?></h4>
                            <h5><?php the_field('job_title'); ?></h5>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>

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
                    </p>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</div>