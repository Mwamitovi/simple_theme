<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
		<?php wp_head() ?>

	</head>

	<body>

		<header>

			<h1><?php bloginfo('name'); ?></h1>
			<small><?php bloginfo('description'); ?></small>

		</header>			

		<nav class="main-nav">
			<div class="container">
				
				<!-- create a variable - $args - to hold array of arguments -->
				<?php $args = array( 'theme_location' => 'primary'); ?>
				<!-- display navigation menu -->
				<?php wp_nav_menu( $args ); ?>
			</div>
		</nav>
