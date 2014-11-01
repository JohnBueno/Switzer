<?php the_content(); ?>

<ul class="siblings">
  <?php
  $parent = $post->post_parent;
  wp_list_pages("title_li=&child_of=$parent&show_date=modified
  &date_format=$date_format"); ?>
</ul>