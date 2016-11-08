<?php get_header(); ?>
	
	<!---BLOG POST EXCERPTS--->


<div class="blog-excerpts">
		
		
		<!--Begin Loop-->
		<div class="blog-posts">
			<?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); ?>
			
			
			<div class="excerpt-posts">
				
				<div class="blog-posts-image">
				<?php
				if ( has_post_thumbnail() ) {
                	the_post_thumbnail('thumbnail');
              		}
              		?>
			</div>
			
			<div class="excerpt-content">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_date( 'Y-m-d', '<p>', '</p>' ); ?>
				<p><?php the_excerpt(); ?></p>
				<button><a href="<?php the_permalink(); ?>">Read More</a></button>
			</div>
			
			</div>
			
			<?php  }//end while
	   	}//end if
			?>
      <!--End Loop-->
		</div>
		
		
	</div> <!--- END BLOG EXCERPTS--->

	
	<?php get_footer(); ?>