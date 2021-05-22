	<footer>
		<?php if(is_page_template('page-contato.php')): ?>
			<div class="container-fluid">
				<div class="container navfooter">
					<nav class="navbar navbar-expand-lg">

						<a class="navbar-brand" href="/">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/logo-roxo-redu.svg" alt="Logo">
						</a>

						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="/nic/servicos">Serviços</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/nic/portfolio">Portfólio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Loja</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/nic/contato">Contato</a>
								</li>
							</ul>
						</div>

						<div id="social-media">
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
					</nav>
				</div>
			</div>

		<?php else: ?>
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

				<div class="container navfooter">
					<nav class="navbar navbar-expand-lg">

						<a class="navbar-brand" href="/">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/logo-roxo-redu.svg" alt="Logo">
						</a>

						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="/nic/servicos">Serviços</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/nic/portfolio">Portfólio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Loja</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/nic/contato">Contato</a>
								</li>
							</ul>
						</div>

						<div id="social-media">
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
					</nav>
				</div>
			</div>
		<?php endif ?>
    </footer>

    <!--Footer Wordpress-->
    <?php wp_footer();?>
    <!--Fecha footer wordpress-->
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>

</html>