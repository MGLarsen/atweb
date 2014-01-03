<?php
/*
	Template Name: Indhold sidebar højre
*/

get_header(); ?>
	<article class="row">
		<div class="col-md-9">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p>Der er ingen post her!</p>
			<?php endif; 
			wp_reset_query(); ?>
		</div>

		<div class="col-md-3">
			<?php if( dynamic_sidebar( 'sidebar_right' )): ?>
			<?php else: ?>
				<h5>Sidebar højre</h5>
				<p>Der mangler indhold i sidebar højre widget</p>
			<?php endif; ?>
		</div>
	</article>


<?php get_footer(); ?>