<?php get_header(); ?>
	<div class="col-md-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="blog_cat">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php the_excerpt(); ?>
		</div>

		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</div> <!-- /.col-md-12 -->
<?php get_footer(); ?>