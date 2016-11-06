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
		
		<header>
			<div class="blog-site-title">
				<h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</div>
		</header>
			
			<div class="site-menu">
				<?php
                    wp_nav_menu( array(
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
				));
				?>
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