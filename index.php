<?php get_header(); ?>
	
	<!---CATEGORIES--->
	
	<div class="categories-list">
		<div class="categories"><p>User Experience</p></div>
		<div class="categories"><p>Web Design</p></div>
		<div class="categories"><p>Content</p></div>
		<div class="categories"><p>Publishing</p></div>
	</div>
	
	<!---BLOG POST EXCERPTS--->
	
	<div class="blog-excerpts">
		
		
		<!--Begin Loop-->
		<div class="blog-cards">
			<?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); ?>
			
	
			<div class="blog-cards-image">
				<?php
				if ( has_post_thumbnail() ) {
                	the_post_thumbnail('thumbnail');
              		}
              		?>
			</div>
			
			<div class="excerpt-content">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p>Post Date</p>
				<p><?php the_excerpt(); ?></p>
			</div>
		
			<button><a href="<?php the_permalink(); ?>">Read More</a></button>
			
			<?php  }//end while
	   	}//end if
			?>
      <!--End Loop-->
		</div>
		
		
	</div> <!--- END BLOG EXCERPTS--->

	<button class="more">More Posts</button>


	
	<?php get_footer(); ?>