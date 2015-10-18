<!--
<script>
$(function() {
    var BV = new $.BigVideo({container: $('.video-wrap')});
    BV.init();
    BV.show('<?php //echo get_template_directory_uri(); ?>/images/meter.mp4');
});
</script>
-->
    <div class="video-wrap">
      <div class="hero-area">
      	<div class="container">
      		<div class="text-center">

      			<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/parlay-gastropub.png" class="img-responsive" alt="Parlay Gastropub" title="Cowgirls Orlando"></div>

      				<div class="meta-slider">
      					<div class="meta-slider-frame-top"> </div>
      					<?php echo do_shortcode("[metaslider id=35]"); ?>
			      	</div>
	

			      	<!--    
			      	<div class="meta-slider-frame">
			      		<div class="meta-slider"><?php // echo do_shortcode("[metaslider id=35]"); ?></div>
			      	</div>
			      -->
			</div><!-- /.text-center -->


	      		<div id="a-list-of-our-specials">

				         <div class="col-xs-12 col-sm-4">
				                <img src="<?php echo get_template_directory_uri(); ?>/images/burger-button.jpg" class="img-responsive">
				                	<a href="/cowgirl/menu/lunch/">
				                    <button class="btn btn-more">Menu</button>
				                	</a>        
				        </div> <!-- /.col-xs-12 col-sm-4 --> 

				         <div class="col-xs-12 col-sm-4">
				                <img src="<?php echo get_template_directory_uri(); ?>/images/burger-button.jpg" class="img-responsive">
				                	<a href="/cowgirl/events/">
				                    <button class="btn btn-more">Upcoming Events</button>
				                    </a>
				            </div>
				        </div> <!-- /.col-xs-12 col-sm-4 -->  

				         <div class="col-xs-12 col-sm-4">
				                <img src="<?php echo get_template_directory_uri(); ?>/images/burger-button.jpg" class="img-responsive">
				                	<a href="/cowgirl/book-a-party/birthdaybachelorette/">
				                    <button class="btn btn-more">Book A Party</button>
				                    </a>
				            </div>
				        </div> <!-- /.col-xs-12 col-sm-4 -->      
				    
					</div><!-- /.a-list-of-our-specials -->

        </div><!-- /.container -->
      </div><!-- /.hero-area -->
    </div><!-- /.video-wrap -->