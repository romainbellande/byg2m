<section id="contact">
  <h2>contacts</h2>
  <p>
    Vous êtes intéressés par mes <span class="bold">créations</span> ? <br/>
    Vous cherchez un <span class="bold">graphiste</span> pour prendre en charge vos projets<br/>
    <span class="blue1">LOGOTYPE</span> / <span class="blue2">PRINT</span> / <span class="blue3">WEBDESIGN</span> / <span class="blue4">MOTION DESIGN</span> / <span class="bold">ETC</span>.<br/>
    Je suis à votre disposition pour répondre à vos demandes.
  </p>
  <div class="r-s">
    <?php $my_query = new WP_Query(array('post_type' => 'rs-contact')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <a href="<?php the_field('link'); ?>">
        <img src="<?php the_field('image'); ?>" alt="" />
      </a>
    <?php endwhile; ?>
  </div>
  <div id="mail">byg2mpro@gmail.com</div>
</section>
