<div class="page-header">
<div class="breadcrumbs">
    <?php the_breadcrumb(); ?>
</div>
  <h3>
    <?php if (get_field('sub_title')): ?>
        <?php the_field('sub_title'); ?>
    <?php else: ?>
        <?php echo roots_title(); ?>
    <?php endif; ?>
  </h3>
</div>
