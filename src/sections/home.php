
<section id="home">

  <div id="logo"><img src="<?php echo get_stylesheet_directory_uri().'/images/logo.png'; ?>" alt="" /></div>

  <nav id="site-navigation" class="site-navigation">

    <div id="responsive-menu"><?php wp_nav_menu(array('theme_location' => 'header', 'menu_id' => 'menu-header', 'menu_class' => 'menu-inline')); ?></div>
  </nav>

</section>
