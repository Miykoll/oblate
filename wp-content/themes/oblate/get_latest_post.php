<section class="latest">
		<div class="container">
			<h4>Latest posts</h4>

			<ul>
				<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '5',
				'category__not_in' => array( 5 ),
			);

			$latest = new WP_Query( $args );

			if ( $latest->have_posts() ) :  while ( $latest->have_posts() ) : $latest->the_post(); ?>

				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a> 
				</li>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</ul>
		</div>
	</section>