<?php
// Template Name: Portifólio
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!--css-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page-portifolio.css">
  


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
                            <div class="imgarea">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/item-banner/PORTIFOLIO.svg" alt="">
                            </div>
                            <h1>portifólio</h1>

                    </div>
                </div>
            </div>
        </div>
        <!--/banner-->
    </header>

    <main>
        
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