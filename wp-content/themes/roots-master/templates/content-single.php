<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <div class="page-header">
        <div class="breadcrumbs">
            Portfolio
        </div>
    </div>
    <header>
        <h3>
            <?php the_title(); ?>
            <a id="expand-portfolio" href="#">
                <small class="pull-right">Expand <i class="fa fa-plus"></i></small>
            </a>
        </h3>
    </header>
    <div class="entry-content">
        <div class="dropdown">
        <?php the_content(); ?>
        <div class="row">
            <div class="col-sm-6">
                <h5>Location</h5>
                <p><?php the_field('location');?></p>
            </div>
            <div class="col-sm-6">
                <h5>Size</h5>
                <p><?php the_field('size');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5>Project Type</h5>
                <?php the_category(' '); ?>
            </div>
            <div class="col-sm-6">
                <h5>Status</h5>
                <p><?php the_field('status');?></p>
            </div>
        </div>
        <div class="row links">
            <div class="col-sm-6">
                <p>
                    <a class="boxer" data-gallery="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg">
                        <strong><i class="fa fa-caret-right"></i> <small>View Full Gallery</small></strong>
                    </a>
                    <a href="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" class="boxer hide" data-gallery="gallery"></a>
                    <a href="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" class="boxer hide" data-gallery="gallery"></a>
                    <a href="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" class="boxer hide" data-gallery="gallery"></a>
                    
                    <br/>
                    <?php 
                        $cats = get_the_category();
                        $catId = $cats[0]->cat_ID;
                    ?>
                    <a href="<?php echo get_category_link($catId); ?>">
                        <strong><i class="fa fa-caret-right"></i> <small>View Corporate Projects</small></strong>
                    </a>
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
<?php endwhile; ?>
