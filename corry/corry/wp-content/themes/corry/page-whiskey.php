
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
            	<div id="whiskey-page" class="col-xs-12 col-sm-12">
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<div id="post" style="background-image: url('<?php echo $thumb['0'];?>');" class="whiskey-header-img"><!-- Page Feature Image as background -->

					<?php // Start the loop.
						while ( have_posts() ) : the_post(); 
					?>
					<?php 
						// split content into array
						$content = split_content();
						// output first content section in column1
						echo '<div class="row"><div class="col-xs-12 col-md-6 pull-left whiskey-bg sherwood white text-center">', array_shift($content), '</div></div>';
						// output remaining content sections in column2
					?>

					</div><!-- #post -->
				</div><!-- ../col-xs-12 col-sm-7 colmd-6 -->
			</div><!-- ../Row -->
				
        	<div class="row">			
				<div id="whiskey-page" class="col-xs-12 col-sm-12">
					<?php $featured_images = $dynamic_featured_image->get_featured_images( $postId ); ?>
					<div id="post" style="background-image: url('<?php echo $featured_images['0']['full'];?>');" class="whiskey-header-img">



								<?php // output remaining content sections in column2
						        echo '<div class="row"><div class="col-xs-12 col-md-6 pull-right whiskey-bg sherwood white text-center">', implode($content), '</div></div>';?>

								<?php // End the loop.
									endwhile;
								?>

					</div><!-- #post -->
				</div><!-- ../col-xs-12 col-sm-7 colmd-6 -->
			</div><!-- ../Row -->

		</div><!-- .container-fluid -->
	</div><!-- .page-content-wrapper -->
</div><!-- .wrapper -->