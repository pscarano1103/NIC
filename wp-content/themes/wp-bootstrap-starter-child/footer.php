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
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		
</body>

</html>