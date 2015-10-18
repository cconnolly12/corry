
<?php get_header(); ?>

<div id="wrapper">
<script>
</script>

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<?php include 'navbar.php' ?> 
	</div>
	<!-- /#sidebar-wrapper -->


    <!-- Page Content -->
    <div id="page-content-wrapper">
    <section>
        <div class="container-fluid wood-bg">
        	<div class="row">
            	<div class="col-xs-12 col-sm-5 col-md-5 pull-left desktop">

					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<div id="post" style="background-image: url('<?php echo $thumb['0'];?>'); background-position: left 0px;" class="food-header-img"><!-- Page Feature Image as background -->
					</div><!-- #post -->
				</div><!-- ../col-xs-12 col-sm-7 colmd-6 -->
				

				<div id="scroll" class="col-xs-12 col-sm-7 col-md-7 pull-right text-center scroll-bg">
					<div class="beer-content">

					<div id="navbar" class="navbar-collapse collapse text-center">
		            <?php wp_nav_menu( array( 'theme_location' => 'food-menu', 'container_class' => 'secondary_nav', 'menu_class' => 'secondary ', 'walker' => new Bootstrap_Walker()  ) ) ; ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/celtic-separator.png" class="img-responsive" alt="Menu" title="Menu">
		          </div><!--/.nav-collapse -->

	            	<div class="headline"> 
						<h1 class="glamor white uppercase">
						<?php // =echo get_post_meta(get_the_ID(), 'title', TRUE); ?>
						<?php // the_title() ?></h1>
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
							</div>
						</main>
					</div><!-- .content-area -->
					</div><!-- ./beer-content-->
				</div><!-- ./col-xs-12 col-sm-7 col-md-6 pull-right -->
			</div><!-- ./row -->

		</div><!-- .container-fluid -->
	</section>
	</div><!-- .page-content-wrapper -->
</div><!-- .wrapper -->


<script>
$(function() {
  $('a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('#scroll').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>