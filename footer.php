
			<div class="sidebar">
				
				<!-- determine if a sidebar contains widgets / @param: name or id -->
				<?php if( is_active_sidebar( 'sidebar' )) : ?>

					<!-- display dynamic sidebar / @param: name or id -->
					<?php dynamic_sidebar( 'sidebar' ); ?>
				<?php endif; ?>
				
			</div>

			<div class="clr"></div>

		</div>

		<footer>

			<p>&copy; <?php the_time( 'Y' ); ?> - <?php bloginfo( 'name' ); ?></p>

		</footer>
		
	</body>
</html>