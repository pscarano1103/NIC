<?php
// Template Name: Portifólio
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!--banner-->
        <div id="banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 titulo banner-content">                            
                            <div class="imgarea">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item-banner/PORTIFOLIO.svg" alt="">
                            </div>
                            <h1><?php the_title(); ?></h1>
                            
                    </div>
                </div>
            </div>
        </div>
        <!--/banner-->
    </header>

    <main>
        <div class="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="titulo">
                            <h1>
                                <?php the_field('titulo_sessao') ?>
                            </h1>
                            <div class="underbar"></div> 
                        </div>


                    </div>
                </div>

                <div class="row justify-content-center">

                    <?php 
                            /**
                             * Setup query to show the ‘services’ post type with ‘8’ posts.
                             * Output the title with an excerpt.
                             */
                            $args = array(  
                                'post_type' => 'portfolio',
                                'post_status' => 'publish'
                            );

                            $loop = new WP_Query( $args ); 
                            
                            $contador = 0;
                            $card = "";

                            while ( $loop->have_posts() ) : $loop->the_post();
                                
                                $projeto = get_field('projeto_desc');
                                $imagem_item = get_field('imagem_item_portifolio');
                                $link = get_permalink();

                                $card .= sprintf('<div class="col-md-4">
                                <div class="img-area imagem-projetos">
                                    <h3>%s</h3>
                                    <a href="%s">Confira mais sobre esse projeto</a>
                                    <div class="color-overlay"></div>
                                    <img src="%s" alt="">
                                    
                                </div>
                            </div>', $projeto, $link, $imagem_item);

                            $contador++;

                            endwhile;

                            wp_reset_postdata(); 
                    ?>

                    <?php echo $card ?>
                </div>
            </div>
        </div>
    </main>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>