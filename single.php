<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-9">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php comments_template(); ?>
		</div>

		<div class="col-md-3">
		<?php if( dynamic_sidebar( 'blog' )): ?>
			<?php else: ?>
			<h5>Blog</h5>
			<p>Der mangler indhold i Blog widget</p>
			<?php endif; ?>
		</div>
		
		<?php endwhile; else: ?>
		<p>Der en ingen post her!</p>
	<?php endif;?>

<?php get_footer(); ?>