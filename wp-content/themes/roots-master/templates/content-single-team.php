<ul id="cbp-bislideshow" class="cbp-bislideshow">
	<li><img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg-1.jpg" alt="image01"/></li>
</ul>


<div class="col-md-6 col-md-offset-4 team-col fixed-col">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/team-fpo-lg.jpg" alt="<?php the_title(); ?>">
    <header>
      <h4 class="entry-title"><?php the_title(); ?></h4>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
</div>