<article id="post-<?php the_ID(); ?>" class="article-excerpt cell">
	<?php if ( get_post_thumbnail_id() ) { ?>
	<div class="article-image">
		<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>" height="150" width="150"></a>
	</div>
	<?php } ?>
	<div>
	<h1>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h1>
	<?php the_excerpt(); ?>
	<time datetime="<?php the_time('Y-m-d'); ?>">Published on <?php the_time('F j, Y'); ?></time>
	<?php the_tags( '<div class="tags tags-container">', '', '</div>' ); ?>
	</div>
</article>
