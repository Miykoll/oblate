<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header">
	<div class="small-container">
		<h1>
			<?php the_title(); ?>
		</h1>
		<?php the_content(); ?>
	</div>
</header>

<?php endwhile; endif; ?>

<section class="notes">

	<div class="large-container">
		<div class="grid">

			<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '-1',
				'category_name' => 'Notes',
			);

			$notes = new WP_Query( $args );

			if ( $notes->have_posts() ) :  while ( $notes->have_posts() ) : $notes->the_post(); 

				get_template_part( 'content', get_post_format() );

			endwhile; ?>

		</div>

		<div class="posts-links">
			<div class="pagination-left">
				<?php previous_posts_link(); ?>
			</div>
			<div class="pagination-right">
				<?php next_posts_link(); ?>
			</div>
		</div>

	</div>

</section>

<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>
