<?php
// Template Name: Home
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!--css-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;0,900;1,800&family=Poppins:wght@500&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Coustard&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <!--header Wordpress-->
    <?php wp_head(); ?>
    <!--fecha header Wordpress-->
</head>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<body>   
    <header>
        
        <!--menu-->
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                    <ul class="menu navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" id="ativo" href="/"><?php the_title(); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sobre">Nic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/portifolio">Portifólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Loja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--banner-->
        <div id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 banner-content titulo">                            

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/elipse.svg" id="circle1" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/elipse.svg" id="circle2" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/dotted.svg" id="dotted1" alt="">
                            <p><?php the_field('titulo_banner') ?></p>
                            <h1>
                                <?php the_field('conteudo_banner') ?>
                            </h1>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/dotted.svg" id="dotted2" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/dotted.svg" id="dotted3" alt="">

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
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/rectangleGreen.svg" alt="" id="rectangleGreen">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/rectangleBlue.svg" alt="" id="rectangleBlue">
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
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">

                            <?php if(have_rows('pagina_carousel')): while(have_rows('pagina_carousel')) : the_row(); ?>
                                <div class="carousel-item active">
                                    <div class="row justify-content-center">                                    
                                        
                                        <?php if(have_rows('item_carousel')): while(have_rows('item_carousel')) : the_row(); ?>
                                            <div class="col-md-3" id="item-carrosel">
                                                <div class="content">
                                                    <h1><?php the_sub_field('numero_item') ?></h1>
                                                    <h3><?php the_sub_field('nome_servico') ?></h3>
                                                    <p>
                                                        <?php the_sub_field('texto_item') ?>
                                                    </p>
                                                    <div class="img-area">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/camera.svg" alt="maquina_digital"></div>
                                                </div>
                                            </div>
                                        <?php endwhile; else : endif; ?>                                     
                                    </div>
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/DotPattern.svg" alt="" id="patternDotted">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/circle.svg" alt="" id="circle">
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
                        <a href="/portifolio">Confira mais sobre esse projeto -></a>
                        <div class="color-overlay"></div>
                        <img src="<?php the_sub_field('imagem_projeto_dois') ?>" alt="">
                    </div>
                    <div class="img-area imagem-projetos imagem-position-terceira">
                        <h3>Natural TRID temperos naturais livres de transgênicos</h3>
                        <button>Identidade visual</button>
                        <a href="#">Confira mais sobre esse projeto -></a>
                        <div class="color-overlay"></div>
                        <img src="<?php the_sub_field('imagem_projeto_tres') ?>" alt="">
                    </div>
                <?php endwhile; else : endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" id="confira">Confira mais projetos</a>
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
                                    <img class="viewsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardBlog/viewIcon.svg" alt="">
                                    <span>783</span>

                                    <img class="commentsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardBlog/commentIcon.svg" alt="">
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
                                    <img class="viewsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardBlog/viewIcon.svg" alt="">
                                    <span>783</span>

                                    <img class="commentsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardBlog/commentIcon.svg" alt="">
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
                                    <img class="viewsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardBlog/viewIcon.svg" alt="">
                                    <span>783</span>

                                    <img class="commentsIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardBlog/commentIcon.svg" alt="">
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

    <footer>
        <div class="container-fluid">
            <div id="rodape">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8 titulo">
                            <h1>
                                vamos criar um projeto juntos?
                                <div class="underbar"></div>
                            </h1>
                        </div>
                        <div class="col-8">
                            <h4>
                                Entre em contato e nos mande sua proposta
                            </h4>
                        </div>
                    </div>
    
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <a href="#">
                                <div class="button">
                                    Solicite um orçamento
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>