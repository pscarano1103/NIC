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
                    
                    <?php 
                        /**
                         * Setup query to show the ‘services’ post type with ‘8’ posts.
                         * Output the title with an excerpt.
                         */
                        $args = array(  
                            'post_type' => 'servicos',
                            'post_status' => 'publish'
                        );

                        $loop = new WP_Query( $args ); 
                        
                        $contador = 0;
                        $card = "";

                        while ( $loop->have_posts() ) : $loop->the_post();
                            
                            $numeroItem = get_field('numero_item');
                            $nome_servico = get_field('nome_servico');
                            $texto_item = get_field('texto_item');
                            $imagem_item = get_field('imagem_item');
                            $link = get_permalink();

                            $card .= sprintf('<div class="col-md-4">
                                <a href="%s">
                                    <div class="card">
                                    <div class="content">
                                        <h1>%s</h1>
                                        <h3>%s</h3>
                                        <p>
                                            %s
                                        </p>
                                        <div class="img-area">
                                            <img src="%s" alt="foto-servico">
                                        </div>
                                    </div>
                                    </div>
                                </a>
                            </div>', $link, $numeroItem, $nome_servico, $texto_item, $imagem_item);

                            $contador++;

                        endwhile;

                        wp_reset_postdata(); 
                    ?>
                    <div class="row justify-content-center">
                        <?php echo $card ?>
                    </div> 
                </div>
            </div>
        </main>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
