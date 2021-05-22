<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */
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
                                <h1><?php the_title(); ?></h1>
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
                        <?php if(have_rows('item_pergunta')): while(have_rows('item_pergunta')) : the_row(); ?>
                            <div class="col-md-6">
                                <div class="accordion accordion-flush" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <?php the_sub_field('pergunta_frequente') ?>
                                        </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php the_sub_field('resposta') ?>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </div>
        </main>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
