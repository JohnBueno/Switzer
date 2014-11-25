<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <?php if($bg = get_field('background')): ?>
        <li><img src="<?php echo($bg['url']); ?>"/></li>
    <?php endif; ?>
    
</ul>
<div class="shadow"></div>
<div id="cbp-bicontrols" class="cbp-bicontrols">
    <span class="cbp-biprev"></span>
    <span class="cbp-bipause">pause</span>
    <span class="cbp-binext"></span>
</div>



<div class="col-md-5 col-md-offset-6 col-sm-6 col-sm-offset-6 single-portfolio">
	<div class="extra-pad">
        <?php get_template_part('templates/content', 'single'); ?>
    </div>
</div>
