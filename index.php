<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <!--Link to stylesheet file-->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
	
	<!---HEADER--->
	
	<div class="header">
		<div class="top-level-nav">
			<h1>Web Interactivity and Engagement</h1>
			<div class="site-menu">
				<?php
                    wp_nav_menu( array(
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
				));
				?>
			</div>
		</div>
		<div class="blog-intro">
			<h2>Web Interactivity and Engagement</h2>
			<h3>Improving User Experience Through Wordpress</h3>
			<p>Welcome. In this blog you'll learn about building user-friendly websites using Wordpress. Expect timely content on content management, information governance, user experience, and web development.</p>
		</div>
	</div>
	
	<!---PROFILE--->
	
	<div class="profile">
		<div class="profile-image">
		</div>
		<div class="brief-bio">
			<h3>Behind The Blog</h3>
			<p>Elsie Puig is a writer, web designer, intern, mom, wife, and student living in Richland, WA. Her passion is brinding the gap between useful content and great design.</p>
		</div>
	</div>
	
	<!---CATEGORIES--->
	
	<div class="categories-list">
		<div class="categories"><p>User Experience</p></div>
		<div class="categories"><p>Web Design</p></div>
		<div class="categories"><p>Content</p></div>
		<div class="categories"><p>Publishing</p></div>
	</div>
	
	<!---BLOG POST EXCERPTS--->
	
	<div class="blog-excerpts">
		
		<!---CARD ONE--->
		
		<div class="blog-cards">
			<div class="blog-cards-image">
			</div>
			<h2>Post Title</h2>
			<h3>Post Subtitle</h3>
			<p>Post Date</p>
			<p>Post Excerpt....</p>
			<button>Read More Button</button>
		</div>
		
		<!---CARD TWO--->
		
		<div class="blog-cards">
			<div class="blog-cards-image">
			</div>
			<h2>Post Title</h2>
			<h3>Post Subtitle</h3>
			<p>Post Date</p>
			<p>Post Excerpt....</p>
			<button>Read More Button</button>
		</div>
		
		<!---CARD THREE--->
		
		<div class="blog-cards">
			<div class="blog-cards-image">
			</div>
			<h2>Post Title</h2>
			<h3>Post Subtitle</h3>
			<p>Post Date</p>
			<p>Post Excerpt....</p>
			<button>Read More Button</button>
		</div>
		
		<!---CARD FOUR--->
		
		<div class="blog-cards">
			<div class="blog-cards-image">
			</div>
			<h2>Post Title</h2>
			<h3>Post Subtitle</h3>
			<p>Post Date</p>
			<p>Post Excerpt....</p>
			<button>Read More Button</button>
		</div>
		
		<!---CARD FIVE--->
		
		<div class="blog-cards">
			<div class="blog-cards-image">
			</div>
			<h2>Post Title</h2>
			<h3>Post Subtitle</h3>
			<p>Post Date</p>
			<p>Post Excerpt....</p>
			<button>Read More Button</button>
		</div>
		
		<!---CARD SIX--->
		
		<div class="blog-cards">
			<div class="blog-cards-image">
			</div>
			<h2>Post Title</h2>
			<h3>Post Subtitle</h3>
			<p>Post Date</p>
			<p>Post Excerpt....</p>
			<button>Read More Button</button>
		</div>
		
		<button class="more">More Posts</button>
		
	</div>
	
	<!---CALL TO ACTION--->
	
	<div class="cta">
		<p>Want to stay up to date on the latest? Subscribe!</p>
		<form method="post">
			<input type="email" id="mail" name="user_mail" />
			<button>Subscribe</button>
		</form>
	</div>
	
	<!---FOOTER--->
	
	<footer>
		<div class="three-column">
			<?php dynamic_sidebar('footer-one'); ?>
		</div>
		
		<div class="three-column">
			<?php dynamic_sidebar('footer-two'); ?>
		</div>
		
		<div class="three-column">
			<?php dynamic_sidebar('footer-three'); ?>
		</div>
	
	</footer>
	
</body>
</html>