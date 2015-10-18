<?php get_header(); ?>
<?php include 'navbar2.php' ?>

	<div class="text-center">
		<h1 class="headline uppercase"><?php the_title() ?></h1>
	</div>
</div><!-- #post -->
<div class="header-img-border"></div>

	<!-- Page Content -->
	<div id="int-body">
		<div class="container">
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<img src="<?php echo $thumb['0'];?>" class="img-responsive">
			<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); 
			?>

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">		
					<?php //the_content(); ?>

					<?php /*
						    // original content display
						        // the_content();
						    // split content into array
						        $content = split_content();
						    // output first content section in column1
						        echo '<div class="col-md-6">', array_shift($content), '</div>';
						    // output remaining content sections in column2
						        echo '<div class="col-md-6">', implode($content), '</div>';
						*/
					?>

					<?php 
						// End the loop.
						endwhile;
					?>
				</main>
			</div>

		</div><!-- .container -->
	</div><!-- .int-body -->
	<!-- ./Page Content -->
	
	<?php get_footer(); ?>