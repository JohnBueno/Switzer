<?php while (have_posts()):the_post();?>
	<?php
        $slides = get_field('slides');
    ?>
    
	<div class="header-fixed">
	    
	        <div class="row">
	            <div class="col-md-6 col-sm-6 thumbs col-xs-12" id="portfolio-thumbs">
                    <?php foreach ($slides as $slide): ?>                    
                    <div class="col-xs-1">
	                    <a id="thumb-<?php echo($slide['slide']['id']); ?>" href="#">
	                        <img class="img-responsive" src="<?php echo ($slide['slide']['sizes']['thumbnail']);?>"/>
	                    </a>
	                </div>
	                <?php endforeach;?>
	            </div>
	            <div class="col-md-6 col-sm-6 col-xs-12">
	                <div class="page-header">
	                    <div class="breadcrumbs">
	                        <ul id="breadcrumbs">
	                            <li>PORTFOLIO</li>
	                        </ul>
	                    </div>
	                    <h3><?php the_title();?></h3>
	                </div>
	            </div>
	        </div>
	    
	</div>

	<ul id="cbp-bislideshow" class="cbp-bislideshow no-autoplay">
	    <?php foreach ($slides as $slide): ?>
	        <li id="slide-<?php echo($slide['slide']['id']); ?>">
                <img src="<?php echo ($slide['slide']['url']);?>"/>
            </li>
	    <?php endforeach;?>
	</ul>

	<div class="mobile-portfolio">
	    <div style="margin:0;" class="row mobile-img">
	        <img  class="img-responsive" src="<?php echo ($slides[0]['slide']['sizes']['large']);?>" alt="<?php the_title();?>">
	    </div>

	    <div id="gallery-bicontrols boxer" class="gallery-bicontrols">
	    <?php
    $i = 1;
    foreach ($slides as $slide):
    ?>
	        <!--
	        <?php if ($i == 1): ?>
	            <a href="<?php echo ($slide['slide']['url']);?>" class="gallery-binext boxer" title="<?php the_title();?>, <?php the_field('location');?>" data-gallery="gallery2"></a>
	        <?php elseif ($i == count($slides)): ?>
	            <a href="<?php echo ($slide['slide']['url']);?>" class="gallery-biprev boxer" title="<?php the_title();?>, <?php the_field('location');?>" data-gallery="gallery2"></a>
	        <?php else: ?>
	            <a href="<?php echo ($slide['slide']['url']);?>" class="hide boxer" title="<?php the_title();?>, <?php the_field('location');?>" data-gallery="gallery2"></a>
	        <?php endif;?>
	        -->
	    <?php
    $i++;
    endforeach;
    ?>

	    </div>
	</div>


	<?php endwhile;?>
