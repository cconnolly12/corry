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

			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div id="post" style="background-image: url('<?php echo $thumb['0'];?>'); position: relative;" class="header-img"><!-- Page Feature Image as background -->
            
            	<div class="about-headline "> 
	               <img src="<?php echo get_template_directory_uri(); ?>/images/fleur-cead.png" class="img-responsive fleur" alt="Céad Míle Fáilte" title="Céad Míle Fáilte">
					<h1 class="glamor white uppercase">
						<?php echo get_post_meta(get_the_ID(), 'title', TRUE); ?>
						<?php// the_title() ?></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/separator-cead.png" class="img-responsive separator" alt="Céad Míle Fáilte" title="Céad Míle Fáilte">
				</div>

			</div><!-- #post -->

			<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); 
			?>

			<div id="primary" class="content-area yellow-bg">
				<main id="main" class="site-main text-center" role="main">
					<div class="sherwood white">	
						<?php the_content(); ?>

						<img src="<?php echo get_template_directory_uri(); ?>/images/shamrocks.png" class="img-responsive logo" alt="Corry's Ale House" title="Corry's Ale House">
						
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

					</div>
				</main>
			</div><!-- .content-area -->


		</div><!-- .container-fluid -->
	</div><!-- .page-content-wrapper -->
</div><!-- .wrapper -->