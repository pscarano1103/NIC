<?php
// Template Name: Serviços
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!--banner-->
            <div id="banner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 titulo banner-content">                            

                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/elipse.svg" id="circle1" alt="">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/elipse.svg" id="circle2" alt="">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/dotted.svg" id="dotted1" alt="">
                                <h1><?php the_field('titulo_banner') ?></h1>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/dotted.svg" id="dotted2" alt="">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/dotted.svg" id="dotted3" alt="">

                        </div>
                    </div>
                </div>
            </div>
            <!--/banner-->
        </header>

        <main>
            <div class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-12-md">
                            <div class="titulo">
                                <h1>
                                    <?php the_field('servicos') ?>
                                </h1>
                                <div class="underbar"></div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <?php include(TEMPLATEPATH . "/inc/card-service.php"); ?> 
                </div>
            </div>
        </main>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
