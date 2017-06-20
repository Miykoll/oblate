<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
<header class="single-header">
	<div class="container">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>
</header>

<section class="single-body">
	<div class="container">
		<?php if ( has_excerpt() ) { ?>
			<div class="lead">
				<?php the_excerpt(); ?>
			</div>
		<?php } ?>
		<?php the_content(); ?>
	</div>
</section>
</article>
<?php	endwhile; endif; ?>

<?php get_footer(); ?>
