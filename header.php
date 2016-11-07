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
	
	<header class="header">
		<div class="headerimg">
			
			<!--SITE MENU-->
			
			<div class="top-level-menu">
				
				<h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
				
				<div class="site-menu">
				<?php
                    wp_nav_menu( array(
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
				));
				?>
				</div>
			
			</div>
			
			
			<!--SITE NAME AND DESCRIPTION -->
			
			<div class="transparent-background">
				<div class="blog-site-title">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<h2><?php bloginfo('description'); ?></h2>
				<p>A blog covering the breadth and depth of building websites using Wordpress -- including server-side programming, content management, user experience, and content marketing.</p>
			</div>
			</div>
		</div>
	</header>
	
	
	<!---PROFILE--->
	
	<div class="profile">
		<div class="profile-image">
		</div>
		<div class="brief-bio">
			<?php dynamic_sidebar('profile-widget'); ?>
			<!--<h3>Behind The Blog: Elsie Puig</h3>
			<p>Elsie Puig is a writer, web designer, intern, mom, wife, and student living in Richland, WA. Her passion is brinding the gap between useful content and great design.</p>-->
		</div>
	</div>