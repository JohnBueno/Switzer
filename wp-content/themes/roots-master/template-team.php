<?php
/*
Template Name: Team Template
*/
?>
<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <?php 
        $slides = get_field('slides');
        foreach ($slides as $slide):
    ?>
    <li><img src="<?php echo($slide['slide']['url']); ?>"/></li>
    <?php endforeach; ?>
    
</ul>
<div class="shadow"></div>
	<?php while (have_posts()) : the_post(); ?>
		<div class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6 single-col fixed-col">
            <div class="extra-pad">
  			   <?php get_template_part('templates/page', 'header'); ?>
            </div>
  		</div>

		<div class="team-container col-md-8 col-md-offset-3 col-sm-offset-6 col-sm-6">
			<?php get_template_part('templates/content', 'team'); ?>
		</div>
  		

		<div class="col-md-5 col-md-offset-6 col-sm-offset-6 col-sm-6">
            <div class="extra-pad">
    	  		<ul class="siblings">
    			  <?php
    			  $parent = $post->post_parent;
    			  wp_list_pages("title_li=&child_of=$parent&show_date=modified
    			  &date_format=$date_format"); ?>
    			</ul>
            <div class="extra-pad">
		</div>
	<?php endwhile; ?>
</div>

