<div class="top-nav">
    <header class="banner navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php  if (is_page_template( 'template-portfolio.php' ) || is_category()): ?>
                        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/hdr-logo-dark.png" alt="<?php bloginfo('name'); ?>">
                    <?php else: ?>
                        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/hdr-logo.png" alt="<?php bloginfo('name'); ?>">
                    <?php endif; ?>
                </a>

                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <?php
                        if (has_nav_menu('primary_navigation')) :
                            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
                        endif;
                    ?>
                </nav>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    MENU&nbsp;
                    <i class="fa fa-bars"></i>
                </button>
            
            </div>
            
        </div>
    </header>
</div>
<div class="hide-overflow">
    <a class="open-sidenav toggle-sidenav" href="#">
        <i class="fa fa-bars"></i>
    </a>
    <div id="side-nav" class="side-nav">
        <a class="toggle-sidenav" href="#"><i class="fa fa-close text-right"></i></a>
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'slide'));
            endif;
        ?>
    </div>    
</div>

