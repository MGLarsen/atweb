<?php get_header(); ?>
	<div class="col-md-12">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	
	<?php endwhile; else: ?>
		
		<p>Der en ingen post her!</p>
	
	<?php endif;?>

	</div> <!-- /.col-md-12 -->
<?php get_footer(); ?>