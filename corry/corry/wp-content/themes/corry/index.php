<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container nav-spacing">
	<div class="col-xs-12 col-sm-8 pull-left">
		<h1><?php the_title(); ?></h1>	
		<?php the_content(); ?>

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
	<div class="col-xs-12 col-sm-4 pull-right">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>