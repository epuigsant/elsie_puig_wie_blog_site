<?php get_header(); ?>

<!-- Begin Section Content -->
  <section class="page-template">
    <div class="page">
<!-- BEGIN LOOP -->
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
    /* OUR DATA CONTEXT IS DEFINED */
          the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

          <?php
        } //end while
      }//end if
?>
<!-- END LOOP -->
    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
<!-- End Section Container -->

<?php get_footer(); ?>