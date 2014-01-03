<?php
/*
	Template Name: Indhold sidebar venstre
*/

get_header(); ?>
	<article class="row">
		<div class="col-md-3">
			<?php if( dynamic_sidebar( 'sidebar_left' )): ?>
				<?php else: ?>
				<h5>Sidebar vesntre</h5>
				<p>Der mangler indhold i sidebar venstre widget</p>
			<?php endif; ?>
		</div>
	
		<div class="col-md-9">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p>Der en ingen post her!</p>
			<?php endif; ?>
		</div>
	</article>
<?php get_footer(); ?>