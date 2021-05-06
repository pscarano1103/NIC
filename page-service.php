<?php
// Template Name: Serviços
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!--css-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page-service.css">
  


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

<?php get_header(); ?>

        <!--banner-->
        <div id="banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 titulo banner-content">                            

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/elipse.svg" id="circle1" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/elipse.svg" id="circle2" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/dotted.svg" id="dotted1" alt="">
                            <h1>Serviços</h1>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/dotted.svg" id="dotted2" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/dotted.svg" id="dotted3" alt="">

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
                            <h1>serviços que prestamos</h1>
                            <div class="underbar"></div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card">
                                <div class="content">
                                    <h1>01</h1>
                                    <h3>fotografia</h3>
                                    <p>
                                        Precisa de identidade de visual para seu projeto ?
                                    </p>
                                    <div class="img-area"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/camera.svg" alt="maquina_digital"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="#">
                            <div class="card">
                                <div class="content">
                                    <h1>02</h1>
                                    <h3>papelaria</h3>
                                    <p>
                                        Precisa de identidade de visual para seu projeto ?
                                    </p>
                                    <div class="img-area"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/caneta.svg" alt="maquina_digital"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="#">
                            <div class="card">
                                <div class="content">
                                    <h1>03</h1>
                                    <h3>mentoria</h3>
                                    <p>
                                        Precisa de identidade de visual para seu projeto ?
                                    </p>
                                    <div class="img-area"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/mentoria.svg" alt="maquina_digital"></div>
                                </div>
                            </div>
                        </a>
                    </div>                  
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card">
                                <div class="content">
                                    <h1>04</h1>
                                    <h3>midias digitais</h3>
                                    <p>
                                        Precisa de identidade de visual para seu projeto ?
                                    </p>
                                    <div class="img-area"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arroba.svg" alt="maquina_digital"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="#">
                            <div class="card">
                                <div class="content">
                                    <h1>05</h1>
                                    <h3>marketing</h3>
                                    <p>
                                        Precisa de identidade de visual para seu projeto ?
                                    </p>
                                    <div class="img-area"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/marketing.svg" alt="maquina_digital"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="#">
                            <div class="card">
                                <div class="content">
                                    <h1>06</h1>
                                    <h3>identidade visual</h3>
                                    <p>
                                        Precisa de identidade de visual para seu projeto ?
                                    </p>
                                    <div class="img-area"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vetor.svg" alt="maquina_digital"></div>
                                </div>
                            </div>
                        </a>
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
<?php get_footer(); ?>