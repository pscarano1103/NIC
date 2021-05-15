<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

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
<body>   
    <header>
        

    <?php if (is_page_template('page-home.php')): ?>
        
        <!--menu-->
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                    <ul class="menu navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" id="ativo" href="/nic"><?php the_title(); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nic/sobre">Nic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nic/servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nic/portifolio">Portifólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Loja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nic/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    <?php else: ?>
        <!--menu-->
        <div class="container">
            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="/nic">
                    <img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/logo-branco.svg" alt="Logo">
                </a>

                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                    <ul class="menu navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" id="ativo" href="/nic">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nic/sobre">Nic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nic/servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nic/portifolio">Portifólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Loja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nic/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    <?php endif ?>