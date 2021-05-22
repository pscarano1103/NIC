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
            <style type="text/css">
                header {
                    background: url("<?php the_field('imagem_banner') ?>");
                }
            </style>
        </header>

        <main>
            <div id="nome_produto">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 titulo">
                            <h1>
                                <?php the_field('nome_produto'); ?>
                                <div class="underbar"></div>
                            </h1>
                            
                        </div>

                        <?php the_field('texto_produto'); ?>
                    </div>
                </div>
            </div>
            <div id="desafio">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-5">
                            <div class="titulo">
                                <h1>
                                    <?php the_field('desafio'); ?>
                                    <div class="underbar"></div>
                                </h1>
                            </div>
                            <div class="texto">
                                <?php the_field('texto_desafio'); ?>
                            </div>
                        </div>

                        <div class="col-md-5" id="coluna_dois">
                            <div class="titulo">
                                <h1>
                                    <?php the_field('solucao'); ?>
                                    <div class="underbar"></div>
                                </h1>
                            </div>
                            <div class="texto">
                                <?php the_field('texto_solucao'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imagem1">
                <div class="container">
                    <div class="col-md-12 img-area">
                        <img src="<?php the_field('img1') ?>" alt="">
                    </div>
                </div>
            </div>
        </main>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
