
<?php get_header(); ?>                             

<div id="wrapper">

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<?php include 'navbar.php' ?> 
	</div>
	<!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper beer-bg ">
        <div class="container-fluid wood-bg">
        	<div class="row">
            	<div class="col-xs-12 col-sm-5 col-md-5 pull-left desktop">

					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<div id="post" style="background-image: url('<?php echo $thumb['0'];?>');" class="food-header-img"><!-- Page Feature Image as background -->
					</div><!-- #post -->
				</div><!-- ../col-xs-12 col-sm-7 colmd-6 -->
				

				<div class="col-xs-12 col-sm-7 col-md-7 pull-right text-center scroll-bg">
					<div class="beer-content">
	            	<div class="headline"> 
		               <img src="<?php echo get_template_directory_uri(); ?>/images/slainte-cap.png" class="img-responsive fleur" alt="Slaintet" title="Céad Míle Fáilte">
						<h1 class="glamor white uppercase">
						<?php echo get_post_meta(get_the_ID(), 'title', TRUE); ?>
						<?php// the_title() ?></h1>
					</div>

					<?php // Start the loop.
						while ( have_posts() ) : the_post(); 
					?>

					<div id="primary" class="content-area">
						<main id="main" class="site-main text-center" role="main">
							<div class="sherwood white">	
							<?php the_content(); ?>

								<?php // End the loop.
									endwhile;
								?>

								<?php include 'beer-menu.php' ?> 
							</div>
						</main>
					</div><!-- .content-area -->
					</div><!-- ./beer-content-->
				</div><!-- ./col-xs-12 col-sm-7 col-md-6 pull-right -->


		</div><!-- .container-fluid -->
	</div><!-- .page-content-wrapper -->
</div><!-- .wrapper -->