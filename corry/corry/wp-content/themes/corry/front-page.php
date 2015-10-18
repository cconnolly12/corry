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

            <!-- Section 1 -->       
                <section id="section1" class="home-restaurant">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-lg-12 text-center home-content">
                                <h2 class="grounday white uppercase headline">Voted</h2>
                                <h1 class="grounday yellow uppercase headline">#1 Irish Restaurant</h1>
                                <h2 class="grounday white uppercase headline">On Long Island</h2>
                                <h3 class="grounday white uppercase headline">By Trip Advisor</h3>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            <!-- /Section 1 -->

            <!-- Section 2 -->       
                <section id="section2" class="cead-mile-failte parallax">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 pull-right text-center cead-content">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/fleur-cead.png" class="img-responsive fleur" alt="Céad Míle Fáilte" title="Céad Míle Fáilte">
                                <h2 class="glamor white headline">Céad Míle Fáilte</h2>
                                
                                <p class="sherwood white">Wantagh's comfortable, cozy place where locals could gather and enjoy a cocktail, beer or glass of wine and really good pub food is right at Corry's Ale House! All items on the menu are made from scratch using only the freshest ingredients, and the 20 draught beers make sure there is something for everyone to enjoy. Corry’s is known for its fine selection of Irish Whiskeys, they currently have over 50 varieties, the largest selection on Long Island!</p>
                                
                                <img src="<?php echo get_template_directory_uri(); ?>/images/separator-cead.png" class="img-responsive separator" alt="Céad Míle Fáilte" title="Céad Míle Fáilte">
                                <p><a href="/contact/" class="sherwood white">get directions</a></p>
                            </div><!-- /.col-xs-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            <!-- /Section 2 -->

            <!-- Section 3 -->       
                <section id="section3" class="whiskey parallax">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-centered text-center home-content">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/whiskey-horseshoe.png" class="img-responsive" alt="Whiskey" title="Whiskey">
                                <h2><span class="sofia yellow uppercase">Long Islands<br/>
                                    Largest</span><br/>
                                    <span class="sofia white uppercase headline">Irish</span><br/>
                                    <span class="sofia yellow uppercase">Whiskey<br/>Selection</span>
                                </h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/separator-whiskey.png" class="img-responsive separator" alt="Whiskey" title="Whiskey">
                                <p><a href="/whiskey/" class="sherwood yellow">view our whiskey list</a></p>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            <!-- /Section 3 -->

            <!-- Section 4 -->       
                <section id="section4" class="pub-food parallax">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-lg-12 text-center home-content">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pub-food-pot.png" class="img-responsive separator" alt="Pub Food" title="Pub">
                                <h2 class="sucker white">Scratch Made<br/>Pub Food</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/fleur-pub-food.png" class="img-responsive fleur" alt="Pub Food" title="Pub">
                                <a href="/menu/" class="sherwood white">view our menu</a>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            <!-- /Section 4 -->

            <!-- Section 5 -->       
                <section id="section5" class="slainte">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-6 pull-right text-center beer-content">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/slainte-cap.png" class="img-responsive cap" alt="Slainte" title="Slainte">
                                <h2 class="sherwood">Slainte</h2>
                                <p>Corry’s Ale House prides itself on our beer menu. When the seasons change so does our beer list. From craft beer, to your Irish favorites, our beer is served fresh and cold. So come down and have a pint.</p>
                                <a href="/beer/" class="sherwood yellow">check out beer list</a>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/fleur-slainte.png" class="img-responsive fleur" alt="Slainte" title="Slainte">
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            <!-- /Section 5 -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->