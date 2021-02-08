<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head() ?>
	</head>
	<body>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
			<small><?php bloginfo('description'); ?></small>
			<div class="main">
				<!-- The loop -->
				<?php if(have_posts()): ?>
					post found
				<?php else: ?>
					<!-- wpautop() takes double line breaks and makes them into paragraphs -->
					<?php echo wpautop('Sorry, No posts were found'); ?>
				<?php endif; ?>
			</div>
		</header>
	</body>
</html>