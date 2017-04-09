<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header">
	<div class="small-container">
		<h1>
			<?php the_title(); ?>
		</h1>
		<p>Here are the things I’m currently focused on:</p>
	</div>
</header>

<?php endwhile; endif; ?>

<div class="container">
	<?php the_content(); ?>
</div>



<?php get_footer(); ?>
