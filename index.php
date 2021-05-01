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
<?php get_header(); ?>
        <!--banner-->
        <div id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 banner-content titulo">                            

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/elipse.svg" id="circle1" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/elipse.svg" id="circle2" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/elementos/dotted.svg" id="dotted1" alt="">
                            <p>O QUE FAZEMOS</p>
                            <h1>
                                Unimos visão & estratégia para melhorar relações<br> entre marcas<br> & pessoas
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