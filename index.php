		
<?php get_header(); ?>

<div class="main">

	<!-- The loop -->
	<?php if( have_posts() ): ?>

		<!-- the_post() tells WP to move to the next post -->
		<?php while( have_posts() ): the_post(); ?>

			<article class="post">
				
				<h3>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>					
					</a>
				</h3>

				<div class="meta">

					<!-- Created by matovu on February 8, 2021 -->
					<!-- Created by <?php /** the_author(); ?> on <?php the_date(); **/ ?><br/> -->

					<!-- Created by matovu on Monday 8th of February 2021 09:14:01 AM -->
					<!-- Created by <?php /** the_author(); ?> on <?php the_date('l jS \of F Y h:i:s A'); **/ ?><br/> -->

					<!-- Created by matovu on 9:14 am -->
					<!-- Created by <?php /** the_author(); ?> on <?php the_time(); **/ ?><br/> -->

					<!-- Created by matovu on February 8, 2021 9:14:am -->
					Created by <?php the_author(); ?> on <?php the_time('F j, Y g:i:a'); ?>

				</div>

				<?php the_excerpt(); ?>

				<a class="button" href="<?php the_permalink(); ?>">
					Read more
				</a>

			</article>

		<?php endwhile; ?>

	<?php else: ?>

		<!-- wpautop() takes double line breaks and makes them into paragraphs -->
		<?php echo wpautop('Sorry, No posts were found'); ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
