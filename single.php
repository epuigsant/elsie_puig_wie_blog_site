<?php get_header(); ?>

<!-- Begin Section Content -->
  <section class="single-blog-post">
<!-- BEGIN LOOP -->
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
    /* OUR DATA CONTEXT IS DEFINED */
          the_post();
          if ( has_post_thumbnail() ) { ?>
            <div class="post-thumbnail"><?php the_post_thumbnail('medium'); ?></div>
            <?php } ?>

          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>

          <?php
        } //end while
      }//end if
?>
<!-- END LOOP -->
  </section>
<!-- End Section Container -->

<?php get_footer(); ?>