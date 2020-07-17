<?php
	$tema = get_bloginfo('template_url');
	$assets = $tema . '/assets';
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Econaçu</title>

		<link rel="stylesheet" href="<?php echo $assets; ?>/css/style.css" />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Raleway:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=Rubik:wght@300;400;500;700&Open+Sans:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
		
	</head>
	<body <?php body_class(); ?>>
			
		<header id="header" class="d-block sticky-top">

			<section class="header border-bottom">
				<div class="container">

					<div class="row">
						<div class="col-6 col-lg-3">
							<a href="/wordpress"><img src="<?php echo $assets; ?>/img/econassu.svg" alt="Logo Econaçú" class="img-fluid logo" /></a>
						</div>

						<div class="col-6 d-lg-none">
							<div class="h-100 d-flex align-items-center justify-content-end">
								<div id="hamburguer" data-toggle="collapse" data-target="#menu-collapse">
									<span class="line"></span>
									<span class="line"></span>
									<span class="line"></span>
								</div>
							</div>
						</div>


						<div class="offset-lg-3 col-lg-6">
							<nav id="menu-collapse" class="collapse d-lg-contents">
								<ul class="menu d-flex flex-column flex-lg-row align-items-center justify-content-lg-between h-100 font-weight-semibold">
									<li>
										<a href="#" class="link-menu my-3">SOBRE</a>
									</li>
									<li>
										<a href="#" class="link-menu my-3">REGRAS</a>
									</li>
									<li>
										<a href="#" class="link-menu my-3">SUBMISSÕES</a>
									</li>
									<li>
										<a href="#" class="link-menu especial btn btn-en-yellow-dark rounded-0 my-3">INSCRIÇÃO</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>

				</div>					
			</section>

			<?php
				if(is_front_page()) {
					dynamic_sidebar( 'apos_header' );
				}
			?>
		</header>
		
			
		<?php wp_head(); ?>