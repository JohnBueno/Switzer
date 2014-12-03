<?php
/*
Template Name: Home Template
*/
?>
<?php while (have_posts()) : the_post(); ?>

<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <?php 
        $slides = get_field('slides');
        foreach ($slides as $slide):
    ?>
    <li><img src="<?php echo($slide['slide']['url']); ?>"/></li>
    <?php endforeach; ?>
	
</ul>

<?php endwhile; ?>

<div class="shadow"></div>
<div class="logo">
	<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/home-logo.png" alt="">
</div>
<div class="celebrate">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/switzer_40yrs.png" alt="">
</div>

<div class="experience">
	<h4>EXPERIENCE THE VISION</h4>
</div>

<div id="cbp-bicontrols" style="position:absolute; z-index:200; display:none;" class="cbp-bicontrols">
    <span class="cbp-biprev"></span>
    <span id="cbp-bipause" class="cbp-bipause"></span>
    <span class="cbp-binext"></span>
</div>