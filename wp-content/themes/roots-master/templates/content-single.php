
<?php while (have_posts()) : the_post(); ?>
<div class="col-md-5 col-md-offset-6 col-sm-6 col-sm-offset-6 single-portfolio">
    <div class="extra-pad">
        <article <?php post_class(); ?>>
            <div class="page-header">
                <div class="breadcrumbs">
                    <ul id="breadcrumbs">
                        <li>
                        <a href="<?php bloginfo('url'); ?>/portfolio">Portfolio</a>
                            
                        </li>
                    </ul>
                </div>
            </div>
            <header>
                <div class="row">
                    <div class="col-xs-8">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="col-xs-4">
                        <h3 class="expand-portfolio">
                            <a id="expand-portfolio" href="#">
                                <small class="pull-right">Expand &nbsp;&nbsp;<i class="fa fa-plus"></i></small>
                            </a>
                        </h3>
                    </div>
                </div>
            </header>
            <div class="entry-content">
                <div class="dropdown">
                <hr>
                <?php the_content(); ?>
                <div class="row">
                    <div class="col-xs-6">
                        <h5>Location</h5>
                        <p><?php the_field('location');?></p>
                    </div>
                    <div class="col-xs-6">
                        <h5>Size</h5>
                        <p><?php the_field('size');?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h5>Project Type</h5>
                        <?php the_category(' '); ?>
                    </div>
                    <div class="col-xs-6">
                        <h5>Status</h5>
                        <p><?php the_field('status');?></p>
                    </div>
                </div>
                <div class="row links">
                    <div class="col-xs-6">
                        <p>  
                            <?php
                                $i = 0; 
                                $slides = get_field('slides');
                                foreach ($slides as $slide):
                            ?>
                                <?php if ($i==0): ?>
                                    <a class="boxer" data-gallery="gallery1" href="<?php echo($slide['slide']['url']); ?>" title="<?php the_title(); ?>, <?php the_field('location');?>">
                                        <strong><i class="fa fa-caret-right"></i> <small>View Full Gallery</small></strong>
                                    </a>
                               
                                <?php else: ?>
                                     <a href="<?php echo($slide['slide']['url']); ?>" title="<?php the_title(); ?>, <?php the_field('location');?>" class="boxer hide" data-gallery="gallery1"></a>
                                <?php endif; ?>    
                            <?php 
                                $i++;
                                endforeach; 
                            ?>
                            
                            <br/>
                            <?php 
                                $cats = get_the_category();
                                $catId = $cats[0]->cat_ID;
                            ?>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p>
                            <a href="<?php bloginfo('url'); ?>/portfolio">
                                <strong><i class="fa fa-caret-right"></i> <small>Back To Portfolio</small></strong>
                            </a>
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </article>
    </div>
</div>
<a href="<?php echo($slides[0]['slide']['sizes']['large']); ?>" data-gallery="gallery2" class="background-boxer boxer visible-sm-md-lg"></a>

<div class="mobile-portfolio">
    <div style="margin:0;" class="row mobile-img">
        <img  class="img-responsive" src="<?php echo($slides[0]['slide']['sizes']['large']); ?>" alt="<?php the_title(); ?>">
    </div>

    <div id="gallery-bicontrols boxer" class="gallery-bicontrols">
    <?php
        $i = 1; 
        foreach ($slides as $slide):
    ?>
        <?php if ($i==1): ?>
            <a href="<?php echo($slide['slide']['url']); ?>" class="gallery-binext boxer" title="<?php the_title(); ?>, <?php the_field('location');?>" data-gallery="gallery2"></a>
        <?php elseif($i==count($slides)): ?>
            <a href="<?php echo($slide['slide']['url']); ?>" class="gallery-biprev boxer" title="<?php the_title(); ?>, <?php the_field('location');?>" data-gallery="gallery2"></a>
        <?php else: ?>
            <a href="<?php echo($slide['slide']['url']); ?>" class="hide boxer" title="<?php the_title(); ?>, <?php the_field('location');?>" data-gallery="gallery2"></a>
        <?php endif; ?>    
    <?php 
        $i++;
        endforeach; 
    ?>
        
    </div>
</div>


<?php endwhile; ?>
