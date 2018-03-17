<?php get_header(); ?>

<header class="page-header">
	<div class="small-container">
			<?php if ( get_post_thumbnail_id() ) { ?>
			<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>" height="150" width="150"></a>
			<?php } ?>
			<h1>
				<?php the_title(); ?>
			</h1>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>">
				<?php the_time( 'F j, Y' ); ?>
			</time>
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

			<?php the_tags( '<div class="tags">', '', '</div>' ); ?>

			<?php echo do_shortcode('[post-views]'); ?>

		</div>
		
		<!-- <div class="dark-box"> -->
			<div class="container">
			<br><hr />
			</div>
</section>

<section class="latest">
  <div class="container">
    <h4>Latest posts</h4>
    <?php
	$queryObject = new WP_Query( 'post_type=work&posts_per_page=5' );
	// The Loop!
	if ($queryObject->have_posts()) { ?>
    	  <ul>
            <?php while ($queryObject->have_posts()) {
	     $queryObject->the_post();
	    ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    	    <?php } ?>
    	  </ul>
    <?php } ?>
  </div>
</section>
<?php get_footer(); ?>