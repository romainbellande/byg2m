<section id="portfolio" class="portfolio">


  <div class="portfolio-title">
    <h2>projets</h2>
    <img src="<?php echo get_stylesheet_directory_uri().'/images/logo.png'; ?>" alt="" />
  </div>
  <div class="jcarousel-wrapper">
    <div class="jcarousel" >
    <ul>
      <?php $my_query = new WP_Query(array('post_type' => 'projets')); ?>
      <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li>
            <div class='screenshot'><img src="<?php the_field('screenshot') ?>" alt="" /></div>
        </li>
      <?php endwhile; ?>

    </ul>
  </div>
  <a href="#" class="jcarousel-control-prev"></a>
  <a href="#" class="jcarousel-control-next"></a>
  <p class="jcarousel-pagination"></p>
  </div>
</section>
