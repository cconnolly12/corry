<!-- MOBILE -->
  <div class="row mobile">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 text-left social pull-left">
      <a href="https://www.facebook.com/corrysalehousewantagh" title="Corry's Ale House Facebook Page" target="_blank"><img class="sprite facebook2" src="<?php echo get_template_directory_uri(); ?>/images/img_trans.gif"></a>
      <a href="https://instagram.com/corrysalehouse/" title="Corry's Ale House Facebook Page" target="_blank"><img class="sprite instagram2" src="<?php echo get_template_directory_uri(); ?>/images/img_trans.gif"></a>
    </div><!-- .col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center --> 

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center pull-right">
      <nav class="navbar navbar-inverse navbar-static-top">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="celtic">Menu</span>
              <img src="<?php echo get_template_directory_uri(); ?>/images/shamrocks.png" class="img-responsive" alt="Corry's Ale House" title="Corry's Ale House">
            </button>
          </div><!--/.navbar-header -->
      </nav>
    </div><!-- .col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center --> 

          <div id="navbar" class="navbar-collapse collapse text-center">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'primary_nav', 'menu_class' => 'primary', 'walker' => new Bootstrap_Walker()  ) ); ?>
          </div><!--/.nav-collapse -->
  </div><!-- .row --> 


  <div class="row mobile">
    <div class="col-xs-6 col-centered text-center">
      <div class="text-center">
          <div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/corry-ale-house.png" class="img-responsive" alt="Corry's Ale House" title="Corry's Ale House"></a></div>
          <div class="mobile"><a href="tel:+15168097818" ><img src="<?php echo get_template_directory_uri(); ?>/images/phone-banner.png" class="img-responsive" alt="516.809.7818" title="516.809.7818"></a></div>
      </div><!-- /.text-center -->
    </div><!-- /.col-lg-12 -->
  </div><!-- /.row -->


<!-- DESKTOP -->
<!-- Fixed navbar -->
  <div class="row Desktop">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="col-xs-12 text-center">
          <div class="text-center">
              <div class="logo desktop mobile"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/corry-ale-house.png" class="img-responsive" alt="Corry's Ale House" title="Corry's Ale House"></a></div>
          </div><!-- /.text-center -->
        </div><!-- /.col-lg-12 -->

        <div id="navbar" class="navbar-collapse collapse text-center">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'primary_nav', 'menu_class' => 'primary', 'walker' => new Bootstrap_Walker()  ) ); ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/shamrocks.png" class="img-responsive logo" alt="Corry's Ale House" title="Corry's Ale House">
        </div><!--/.nav-collapse -->


        <div class="logo desktop"><a href="tel:+15168097818" ><img src="<?php echo get_template_directory_uri(); ?>/images/phone-banner.png" class="img-responsive" alt="516.809.7818" title="516.809.7818"></a> </div>

      <div class="row desktop">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center social">
          <a href="https://www.facebook.com/corrysalehousewantagh" title="Corry's Ale House Facebook Page" target="_blank"><img class="sprite facebook1" src="<?php echo get_template_directory_uri(); ?>/images/img_trans.gif"></a>
          <a href="https://instagram.com/corrysalehouse/" title="Corry's Ale House Facebook Page" target="_blank"><img class="sprite instagram1" src="<?php echo get_template_directory_uri(); ?>/images/img_trans.gif"></a>
        </div><!-- .col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center --> 
      </div><!-- .row --> 
    </nav>
  </div>

<script>

    $('#searchicon').click(function(){
    ( $('#search_form').toggle());
    ( $('#searchicon').toggle());
  });
</script>

<?php wp_footer(); ?>





