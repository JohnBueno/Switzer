<?php while (have_posts()):the_post();?>
	<?php
        $slides = get_field('slides');
    ?>
    
	<div class="header-fixed">
	    
	        <div class="row">
	            <div class="col-xs-12 visible-xs">
                    
                    <h4>PORTFOLIO</h4>
                    <h3><?php the_title();?></h3>
                    
                </div>
                <div class="col-md-6 col-sm-6 thumbs col-xs-12" id="portfolio-thumbs">
                    <?php foreach ($slides as $slide): ?>                    
                    <div class="col-xs-1">
	                    <a id="thumb-<?php echo($slide['slide']['id']); ?>" href="#">
	                        <img class="img-responsive" src="<?php echo ($slide['slide']['sizes']['thumbnail']);?>"/>
	                    </a>
	                </div>
	                <?php endforeach;?>
	            </div>
	            <div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
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
	    <?php foreach ($slides as $slide): ?>
            <div class="row mobile-img" id="slide-<?php echo($slide['slide']['id']); ?>">
                <img  class="img-responsive" src="<?php echo ($slide['slide']['url']);?>" alt="<?php the_title();?>">
            </div>
        <?php endforeach;?>
	</div>


	<?php endwhile;?>
