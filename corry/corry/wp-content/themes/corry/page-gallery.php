
<?php get_header(); ?>

<div id="wrapper">

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<?php include 'navbar.php' ?> 
	</div>
	<!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">

        	<div class="row">
            	<div id="gallery-page" class="col-xs-12 col-sm-12">
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<div id="post" style="background-image: url('<?php echo $thumb['0'];?>');" class="gallery-header-img text-center"><!-- Page Feature Image as background -->

					<h1 class="glamor white uppercase">
					<?php the_title() ?></h1>

					<?php
						// Start the loop.
						while ( have_posts() ) : the_post(); 
						
						the_content();

						//echo do_shortcode( '[gmedia id=3]' ); //Gmedia in Template

						// End the loop.
						endwhile;
					?>

					</div><!-- #post -->
				</div><!-- ../col-xs-12 col-sm-7 colmd-6 -->
			</div><!-- ../Row -->

		</div><!-- .container-fluid -->
	</div><!-- .page-content-wrapper -->
</div><!-- .wrapper -->
<?php wp_footer(); ?> 