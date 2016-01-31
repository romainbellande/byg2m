<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title('-', true, 'right'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/lib/jQuery.mmenu/dist/core/css/jquery.mmenu.all.css'; ?>">
<?php wp_head(); ?>

<script src="<?php echo get_stylesheet_directory_uri() . '/lib/jQuery.mmenu/dist/core/js/jquery.mmenu.min.all.js'; ?>"></script>

</head>
<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <div id="wrap-header">
      <header id="masthead">

        <img id="site-branding" src="<?php echo get_stylesheet_directory_uri().'/images/logo.fr.png'; ?>" alt="" />

<a id="responsive-menu-toggle" href="#site-navigation" class="fa fa-bars fa-3x"></a>
        <section id="r-s">
          <?php $my_query = new WP_Query(array('post_type' => 'rs-header')); ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <a href="<?php the_field('link'); ?>">
              <img src="<?php the_field('image'); ?>" alt="" />
            </a>
          <?php endwhile; ?>
        </section>
      </header>
    </div>
    <div id="wrap-main" class="wrap-main">
