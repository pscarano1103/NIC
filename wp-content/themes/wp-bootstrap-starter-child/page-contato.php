<?php
// Template Name: Contato
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!--banner-->
        <div id="banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 titulo banner-content">                            
                            <div class="imgarea">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item-banner/FALE_CONOSCO.svg" alt="">
                            </div>
                            <h1><?php the_title(); ?></h1>

                    </div>
                </div>
            </div>
        </div>
        <!--/banner-->
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="titulo">
                        <h1>
                            <?php the_field('titulo_1') ?>
                            <div class="underbar"></div>    
                        </h1>
                    </div>

                    <div class="conteudo">
                        <?php the_field('conteudo_1') ?>
                    </div>

                    <div class="telefone">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/contato/Vector.png" alt="Telefone">
                        <p><?php the_field('telefone') ?></p>
                    </div>

                    <div class="email">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/contato/E-MAIL.png" alt="email">
                        <p><?php the_field('email') ?></p>
                    </div>
                    
                    
                    <div class="titulo titulo2">
                        <h1>
                            <?php the_field('titulo_2') ?>
                            <div class="underbar"></div>    
                        </h1>
                    </div>

                    <div class="icones">
                        <a href="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-media/face.svg" alt="facebook">
						</a>
						<a href="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-media/insta.svg" alt="instagram">
						</a>
						<a href="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-media/twitter.svg" alt="twitter">
						</a>
						<a href="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-media/pinter.svg" alt="pinterest">
						</a>
						<a href="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-media/social.svg" alt="social">
						</a>
                    </div>

                    <div class="titulo titulo3">
                        <h1>
                            <?php the_field('titulo_3') ?>
                            <div class="underbar"></div>    
                        </h1>
                    </div>

                    <div class="button">
                        <a href="#">
							<div class="button">
								Solicite um orçamento
							</div>
						</a>
                    </div>
                </div>

                <div class="col-md-7 formulario">
                    <form>
                        <div class="titulo tituloForm">
                            <h1>
                                <?php the_field('titulo_form') ?>
                                <div class="underbar"></div>    
                            </h1>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>