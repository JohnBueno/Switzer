<div class="page-header">
<div class="breadcrumbs">
    <a href="<?php bloginfo('url'); ?>/careers">Careers</a>
    <?php if (is_single()): ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            / <?php the_title(); ?>
        </a>
    <?php endif; ?> 
</div>
  <h3>
    <?php echo roots_title(); ?>
  </h3>
</div>
