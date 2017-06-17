<?php get_header(); ?>

<section class="landing-page">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<header class="landing-header">
		<div class="container">
			<div class="banner">
				<h1>Michael ten Den</h1>
				<p class="lead-subtitle">Jack of all trades, master of none.</p>
				<?php the_content(); ?>
			</div>
		</div>
	</header> 

	<?php endwhile; endif; ?>

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

	<!-- <section class="popular">
		<div class="container">

			<h4>Popular posts</h4>

			<ul>
				<?php $args = array(
				'order' => 'asc',
				'posts_per_page' => '5',
				'category_name' => 'Popular',
				'category__not_in' => array( 5 ),
			);

			$popular = new WP_Query( $args );

			if ( $popular->have_posts() ) :  while ( $popular->have_posts() ) : $popular->the_post(); ?>

				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a> 
				</li>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</ul>

		</div>
	</section> -->

</section>
<?php get_footer(); ?>
