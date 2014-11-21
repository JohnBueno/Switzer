<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <?php 
        $slides = get_field('slides');
        foreach ($slides as $slide):
    ?>
    <li><img src="<?php echo($slide['slide']['url']); ?>"/></li>
    <?php endforeach; ?>
    
</ul>
<div class="shadow"></div>
<div id="cbp-bicontrols" class="cbp-bicontrols">
    <span class="cbp-biprev"><i class="fa fa-chevron-left"></i></span>
    <span class="cbp-bipause">pause</span>
    <span class="cbp-binext"><i class="fa fa-chevron-right"></i></span>
</div>



<div class="col-md-5 col-md-offset-6 col-sm-6 col-sm-offset-6 single-portfolio">
	<div class="extra-pad">
        <?php get_template_part('templates/content', 'single'); ?>
    </div>
</div>
