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
                    background: url("<?php the_field('imagem_banner') ?>") no-repeat;
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
                                    <?php the_field('titulo1'); ?>
                                    <div class="underbar"></div>
                                </h1>
                            </div>
                            <div class="texto">
                                <?php the_field('texto_1'); ?>
                            </div>
                        </div>

                        <div class="col-md-5" id="coluna_dois">
                            <div class="titulo">
                                <h1>
                                    <?php the_field('titulo2'); ?>
                                    <div class="underbar"></div>
                                </h1>
                            </div>
                            <div class="texto">
                                <?php the_field('texto_2'); ?>
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

            <div id="texto2">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-5">
                            <div class="titulo">
                                <h1>
                                    <?php the_field('titulo3'); ?>
                                    <div class="underbar"></div>
                                </h1>
                            </div>
                            <div class="texto">
                                <?php the_field('texto_3'); ?>
                            </div>
                        </div>

                        <div class="col-md-7 img-area">
                            <img src="<?php the_field('img2') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div id="imagens">
                <div class="container">
                    <div class="row">
                        <?php if(have_rows('galeria')): while(have_rows('galeria')) : the_row(); ?>
                            <div class="col-md-6 img1">
                                <img src="<?php the_sub_field('galeria1') ?>" alt="">
                            </div>

                            <div class="col-md-6 imgs">
                                <div class="row">
                                    <div class="col-md-2 imagem_tres_colunas">
                                        <img src="<?php the_sub_field('galeria2') ?>" alt="">
                                    </div>
                                    <div class="col-md-4 imagem_quatro_colunas">
                                        <img src="<?php the_sub_field('galeria3') ?>" alt="">
                                    </div>
                                </div>

                                <div class="row imagem_sete_colunas">
                                    <img src="<?php the_sub_field('galeria4') ?>" alt="">
                                </div>
                            </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </div>

            <div id="clientes">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 titulo">
                        <h1>
                            <?php the_field('titulo4') ?>
                            <div class="underbar"></div>
                        </h1>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6 clientes-content">
                        <div class="aspas d-flex justify-content-start">
                            <span id="abre">"</span>
                        </div>
                        <p>
                            Adorei seu trabalho!
                            Conseguiu me entregar exatamente o que eu queria. Adorei muito!
                        </p>
                        <div class="aspas d-flex justify-content-end">
                            <span id="fecha">"</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
