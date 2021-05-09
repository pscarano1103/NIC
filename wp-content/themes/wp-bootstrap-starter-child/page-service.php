<?php
// Template Name: Serviços
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_header(); ?>

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
                    
                    <?php if(have_rows('linha_servicos')): while(have_rows('linha_servicos')) : the_row(); ?>
                        <div class="row justify-content-center">

                            <?php if(have_rows('item_servicos')): while(have_rows('item_servicos')) : the_row(); ?>
                                <div class="col-md-3">
                                    <a href="/nic/servicos">
                                        <div class="card">
                                            <div class="content">
                                                <h1><?php the_sub_field('numero_item_servico') ?></h1>
                                                <h3><?php the_sub_field('nome_item_servico') ?></h3>
                                                <p>
                                                    <?php the_sub_field('texto_item_servico') ?>    
                                                </p>
                                                <div class="img-area">
                                                    <img src="<?php the_sub_field('imagem_item_servico') ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; else : endif; ?>
                                        
                        </div>
                    <?php endwhile; else : endif; ?>                      
                </div>
            </div>
        </main>
<?php get_footer(); ?>
<?php endwhile; else: endif; ?>