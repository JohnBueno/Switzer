<div class="page-header">
<div class="breadcrumbs">
	<?php 
		// if there is a parent, display the link
		// $parent_title = get_the_title( $post->post_parent );
		// if ( $parent_title != the_title( ' ', ' ', false ) ) {
		// 	echo '<a href="' . get_permalink( $post->post_parent ) . '" title="' . $parent_title . '">' . $parent_title . '</a> / ';
		// } 
		// then go on to the current page link
	?>
<!-- 	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<?php the_title(); ?>
	</a>  -->

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
