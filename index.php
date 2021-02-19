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
					<!-- the_post() tells WP to move to the next post -->
					<?php while(have_posts()): the_post(); ?>
						<h3><?php the_title(); ?></h3>
						<div class="meta">
							<!-- Created by matovu on February 8, 2021 -->
							<!-- Created by <?php /** the_author(); ?> on <?php the_date(); **/ ?><br/> -->
							<!-- Created by matovu on Monday 8th of February 2021 09:14:01 AM -->
							Created by <?php the_author(); ?> on <?php the_date('l jS \of F Y h:i:s A'); ?><br/>
							<!-- Created by matovu on 9:14 am -->
							Created by <?php the_author(); ?> on <?php the_time(); ?><br/>
							<!-- Created by matovu on February 8, 2021 9:14:am -->
							Created by <?php the_author(); ?> on <?php the_time('F j, Y g:i:a'); ?>
						</div>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php else: ?>
					<!-- wpautop() takes double line breaks and makes them into paragraphs -->
					<?php echo wpautop('Sorry, No posts were found'); ?>
				<?php endif; ?>
			</div>
		</header>
		<footer>
			<p>&copy; <?php the_time('Y'); ?> - <?php bloginfo('name'); ?></p>
		</footer>
	</body>
</html>
