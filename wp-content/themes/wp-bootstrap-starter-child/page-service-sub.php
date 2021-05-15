<?php
// Template Name: Sub-Serviços
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

                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div class="img-area">
                                <img src="<?php the_field('imagem_subservico') ?>" alt="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <?php the_field('conteudo_sub_servico') ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12-md">
                            <div class="titulo">
                                <h1>
                                    <?php the_field('duvidas_frequentes') ?>
                                </h1>
                                <div class="underbar"></div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row" id="duvidas">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <p class="dropdown-item">Action</p>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
