<div class="header-fixed"> 
    <div class="col-md-4 col-md-offset-6 col-sm-6 col-sm-offset-6">
        <div class="page-header">
            <div class="breadcrumbs">
                <?php if(is_page_template("template-portfolio.php")): ?>
                <ul id="breadcrumbs">
                    <li><a class="white" href="<?php bloginfo('url'); ?>/portfolio">Portfolio</a></li>
                </ul>
                <?php else: ?>
                    <?php the_breadcrumb(); ?>
                <?php endif; ?>
            </div>
            
        </div>  
    
    </div>
</div>