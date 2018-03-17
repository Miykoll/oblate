<article id="post-<?php the_ID(); ?>" class="article-excerpt cell">
	<?php if ( get_post_thumbnail_id() ) { ?>
	<div class="article-image">
		<a href="<?php echo the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title(); ?>" width="auto" height="150px"></a>
	</div>
	<?php } ?>
	<div>
	<h1>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h1>
	<?php the_excerpt(); ?>
	<?php the_tags( '<div class="tags tags-container">', '', '</div>' ); ?>
	</div>
</article>
