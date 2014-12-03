<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <?php if($bg = get_field('background')): ?>
        <li><img src="<?php echo($bg['url']); ?>"/></li>
    <?php endif; ?>
    
</ul>
<div class="shadow"></div>


<?php get_template_part('templates/content', 'single'); ?>

