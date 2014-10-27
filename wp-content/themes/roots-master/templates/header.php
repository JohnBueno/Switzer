<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        MENU&nbsp;
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
          <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/hdr-logo.png" alt="<?php bloginfo('name'); ?>">
      </a>
    </div>
    <nav class="collapse navbar-collapse navbar-right" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>

    
  </div>
</header>
