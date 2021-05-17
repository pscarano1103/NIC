<?php
// Template Name: Home
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_header(); ?>
        <!--banner-->
        <div id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 banner-content titulo">                            

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/elipse.svg" id="circle1" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/elipse.svg" id="circle2" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/dotted.svg" id="dotted1" alt="">
                            <p><?php the_field('titulo_banner') ?></p>
                            <h1>
                                <?php the_field('conteudo_banner') ?>
                            </h1>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/dotted.svg" id="dotted2" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/dotted.svg" id="dotted3" alt="">

                    </div>
                </div>
            </div>
        </div>

        <div id="sticker">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-12 align-self-center sticker">
                        <p>
                            Tem um projeto e quer tirar ele do papel?
                        </p>
                        <span>
                            Vamos bater um papo!
                        </span>
                        <div class="underbar"></div>

                    </div>
                </div>
            </div>
        </div>
        <!--/banner-->
    </header>

    <main>
        

        <div id="podemos">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/rectangleGreen.svg" alt="" id="rectangleGreen">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/rectangleBlue.svg" alt="" id="rectangleBlue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 titulo">
                        <h1>
                            <?php the_field('podemos') ?>
                            <div class="underbar"></div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="carousel">
            <div class="container">
                <div class="col-md-12">

                    
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

                                $card .= sprintf('<a href="%s">
                                        <div class="card" id="item-carrosel">
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
                                </a>', $link, $numeroItem, $nome_servico, $texto_item, $imagem_item);

                                $contador++;

                            endwhile;

                            wp_reset_postdata(); 
                        ?>
                        <div class="owl-carousel owl-theme">
                            <?php echo $card ?>
                        </div>                    
                </div>

            </div>
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/DotPattern.svg" alt="" id="patternDotted">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elementos/circle.svg" alt="" id="circle">
        <div class="projetos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 titulo">
                        <h1>
                            <?php the_field('projetos') ?>
                            <div class="underbar"></div>
                        </h1>
                    </div>
                </div>
                <div class="row">
                <?php if(have_rows('imagens_sessao_projetos')): while(have_rows('imagens_sessao_projetos')) : the_row(); ?>
                    <div class="img-area imagem-projetos imagem-position-principal">
                        <img src="<?php the_sub_field('imagem_projeto_um') ?>" alt="">
                    </div>
                    <div class="img-area imagem-projetos imagem-position-segunda">
                        <h3>Natural TRID temperos naturais livres de transgênicos</h3>
                        <button>Identidade visual</button>
                        <a href="/nic/portfolio">Confira mais sobre esse projeto -></a>
                        <div class="color-overlay"></div>
                        <img src="<?php the_sub_field('imagem_projeto_dois') ?>" alt="">
                    </div>
                    <div class="img-area imagem-projetos imagem-position-terceira">
                        <h3>Natural TRID temperos naturais livres de transgênicos</h3>
                        <button>Identidade visual</button>
                        <a href="/nic/portfolio">Confira mais sobre esse projeto -></a>
                        <div class="color-overlay"></div>
                        <img src="<?php the_sub_field('imagem_projeto_tres') ?>" alt="">
                    </div>
                <?php endwhile; else : endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="/nic/portfolio" id="confira">Confira mais projetos</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="clientes">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 titulo">
                        <h1>
                            <?php the_field('clientes') ?>
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

        </div>

        <div id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 titulo">
                        <h1>
                            <?php the_field('blog') ?>
                            <div class="underbar"></div>
                        </h1>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-box">
                                <p>Afinal<br> o que é <span>pattern</span>?</p>
                            </div>
                            <div class="card-body">
                                <h6> 11 February 2019</h6>
                                <h4 class="card-title" id="date">afinal o que é pattern</h4>
                                <p class="card-text">Bunch of components will help you to prototype, design & build much faster.</p>

                                <div class="visualizacao">
                                    <img class="viewsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cardBlog/viewIcon.svg" alt="">
                                    <span>783</span>

                                    <img class="commentsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cardBlog/commentIcon.svg" alt="">
                                    <span>46</span>

                                    <a href="#">leia mais</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-box">
                                <p>Afinal<br> o que é <span>pattern</span>?</p>
                            </div>
                            <div class="card-body">
                                <h6> 11 February 2019</h6>
                                <h4 class="card-title" id="date">afinal o que é pattern</h4>
                                <p class="card-text">Bunch of components will help you to prototype, design & build much faster.</p>

                                <div class="visualizacao">
                                    <img class="viewsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cardBlog/viewIcon.svg" alt="">
                                    <span>783</span>

                                    <img class="commentsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cardBlog/commentIcon.svg" alt="">
                                    <span>46</span>

                                    <a href="#">leia mais</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-box">
                                <p>Afinal<br> o que é <span>pattern</span>?</p>
                            </div>
                            <div class="card-body">
                                <h6> 11 February 2019</h6>
                                <h4 class="card-title" id="date">afinal o que é pattern</h4>
                                <p class="card-text">Bunch of components will help you to prototype, design & build much faster.</p>
                                
                                <div class="visualizacao">
                                    <img class="viewsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cardBlog/viewIcon.svg" alt="">
                                    <span>783</span>

                                    <img class="commentsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cardBlog/commentIcon.svg" alt="">
                                    <span>46</span>

                                    <a href="#">leia mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
<?php endwhile; else: endif; ?>
