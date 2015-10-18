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
            	<div class="col-xs-12 col-sm-7 col-md-6 pull-left beer-header desktop">

					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<div id="post" style="background-image: url('<?php echo $thumb['0'];?>');" class="contact-header-img"><!-- Page Feature Image as background -->
					</div><!-- #post -->
				</div><!-- ../col-xs-12 col-sm-7 colmd-6 -->
				

				<div class="col-xs-12 col-sm-5 col-md-6 pull-right contact-bg">
					<div class="beer-content">
	            	<div class="headline"> 
						<h1 class="glamor white uppercase">
						<?php // echo get_post_meta(get_the_ID(), 'title', TRUE); ?>
						<?php the_title() ?></h1>
						<img src="<?php echo get_template_directory_uri(); ?>/images/fleur-cead.png" class="img-responsive fleur" alt="Céad Míle Fáilte" title="Céad Míle Fáilte">
					</div>

					<?php // Start the loop.
						while ( have_posts() ) : the_post(); 
					?>

					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<div class="sherwood white">	
							<?php the_content(); ?>

								<?php // End the loop.
									endwhile;
								?>
							</div>
						</main>
					</div><!-- .content-area -->
					</div><!-- ./beer-content-->
				</div><!-- ./col-xs-12 col-sm-7 col-md-6 pull-right -->
			</div><!-- ./row -->

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.0592474674063!2d-73.50847569999999!3d40.672663500000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c27f1c3a0dd433%3A0xee975305e40784e1!2s3274+Railroad+Ave%2C+Wantagh%2C+NY+11793!5e0!3m2!1sen!2sus!4v1442499970858" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div><!-- .container-fluid -->
	</div><!-- .page-content-wrapper -->
</div><!-- .wrapper -->