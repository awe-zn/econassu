<?php
get_header();
$tema = get_bloginfo('template_url');
$assets = $tema . '/assets';
?>
<main>
			<section class="sec-principal">
				<section class="bg">
					<div class="container">
						<div class="row pb-5">
							
							<div class="col-lg-6 col-md-12">
								<h1 class="font-weight-bold h1 text-light mt-en-92 mb-en-40">O AJUSTE FISCAL E O FUNCIONALISMO PÚBLICO NO BRASIL</h1>
								
								<p class="font-weight-normal h6 text-light mb-5">E aqui um texto que explica a frase de impacto e fala um pouco sobre a grandeza do evento e sua importância.</p>

								<a href="#" class="btn bt-hero-inscricao">
									<span class="text">REALIZAR INSCRIÇÃO</span>
								</a>
							</div>

							<section class="col-lg-5 col-md-12 offset-lg-1 sub-sec-destaques">
								<div id="regras" class="regras h-100 d-flex justify-content-evenly flex-column text-white-50 px-en-40">
									<a href="#" class="bt-detalhes">
										<strong>REGRAS E SUBMISSÕES</strong>
										<span>É importante ficar atento as regras de submissão do evento. Confira aqui.</span>
									</a>
									<a href="#" class="bt-detalhes">
										<strong>CONVIDADOS</strong>
										<span>Como fazemos todos os anos, teremos três convidados das diversas áreas da economia para participar de uma mesa redonda.</span>
									</a>
									<a href="#" class="bt-detalhes">
										<strong>PROGRAMAÇÃO 2020</strong>
										<span>A programação completa está confirmada e é possível conferir clicando neste link.</span>
									</a>
								</div>
							</section>

						</div>
					</div>
				</section>
			</section>



			<section class="sec-parceiros">
				<div class="container">
					<div class="row">
						<div class="col-12 col-xl-2 col-lg-3 col-md-4 pt-5">
							<h2 class="h3">REALIZAÇÃO</h2>
							<img src="<?php echo $assets; ?>/img/uern.png" alt="" class="img-fluid" />							
						</div>
						<div class="col-12 col-xl-10 col-lg-9 col-md-8 pt-5">
							<h2 class="h3">APOIO</h2>
							<img src="<?php echo $assets; ?>/img/ufrn.png" alt="" class="img-fluid" />
							<img src="<?php echo $assets; ?>/img/ufersa.png" alt="" class="img-fluid" />
							<img src="<?php echo $assets; ?>/img/ifrn.png" alt="" class="img-fluid" />
						</div>
					</div>
				</div>
			</section>



			<section class="sec-sobre">
				
				<section class="sub-sec-carrossel container">
					<div class="row">
						<div class="col-lg-5 pt-5">
							<div class="owl-carousel owl-theme font-weight-bold text-black" id="carousel">
								<div class="item">
									<figure class="figure d-flex flex-column align-items-end">
										<img src="<?php echo $assets; ?>/img/ipanguacu.png" alt="Ipanguacu" class="img-fluid citys" />
										<legend>IPANGUACU</legend>
									</figure>
								</div>
								<div class="item">
									<figure class="figure d-flex flex-column align-items-end">
										<img src="<?php echo $assets; ?>/img/mossoro.jpg" alt="Ipanguacu" class="img-fluid citys" />
										<legend>MOSSORÓ</legend>
									</figure>
								</div>
							</div>
							<div id="control-imgs" class="control-imgs">
								<button id="prev"><</button>
								<button id="next">></button>
							</div>
						</div>
						<div class="col-lg-6 offset-lg-1 pt-5">
							<?php
								dynamic_sidebar( 'section_about' );
							?>
							
							<!-- <h2 class="text-dark fz-32 font-weight-bolder"><?php echo $post->post_title; ?></h2>
							<p class="fz-20 mt-4 mb-en-40"><?php echo $post->post_excerpt; ?></p> -->

							<a href="<?php echo $link; ?>" class="btn btn-dark btn-lg rounded-0 font-weight-bold py-2 px-5">Saiba mais</a>							
						</div>
					</div>
				</section>


				<section class="sub-sec-programacao">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div id="programacao">
									<h1 class="fz-28 font-weight-bolder text-pink m-0 pb-2 position-relative bg-fa" id="data">DATAS IMPORTANTES</h1>
									<h4 class="fz-18 text-black-50 mb-en-70 position-relative bg-fa">NOSSA PROGRAMAÇÃO</h4>
								</div>
							</div>
							<?php
								$programacao = new WP_Query(array(
									"post_type" => "programacao"
								));

								if ($programacao -> have_posts()) {
									$order = 8;
									while ($programacao -> have_posts()) {
										$programacao -> the_post(); ?>
									<div class="col-md-4 item-programacao order-<?php echo $order; ?>">
										<div class="d-flex flex-column mb-3 mb-md-0 font-weight-medium">
											<h3 class="font-montserrat font-weight-bold fz-48"><?php the_title(); ?></h3>
											<div class="agenda"><?php the_content(); ?></div>
										</div>
									</div>
									<?php
										$order--;
									}
								}
							?>
							<div class="col-12 pt-5 container-download order-9">
								<a href="#" class="link-download" title="clique para fazer download da programação"><i class="fas fa-file-download mr-2"></i>PROGRAMAÇÃO COMPLETA</a>								
							</div>
						</div>
					</div>
				</section>
			</section>

			<section class="sec-noticias">
				<div class="container">
					
					<h2 class="font-weight-bolder text-white-50">ÚLTIMAS DO ECONASSU</h2>
					<div class="row mt-5">
						<?php
							$news = new WP_Query(Array(
								"post_type" => "post",
								"posts_per_page" => 4
							));

							if ($news -> have_posts()) {
								$count = 1;
								$open = false;
								while ($news -> have_posts()) {
									$news->the_post();

									if ($count == 1) { ?>
									<div class="col-lg-6 noticia-principal pt-4 pb-4">
										<h3 class="text-white fz-18 text-uppercase font-weight-bolder m-0"><?php the_title(); ?></h3>
										<div class="position-relative">
											<span class="d-block pt-4 text-white-50 fz-12" id="date">Publicado em <time><?php the_time('d/m/Y'); ?></time></span>
										</div>
										<div class="text-white-50 mt-4 mb-4"><?php the_excerpt(); ?></div>
										<a href="<?php the_permalink(); ?>" class="btn btn-outline-en-yellow-dark rounded-0 font-weight-bold py-2 px-5">LER MAIS</a>
									</div>
									<?php
									} else {
										if (!$open) { ?>
											<div class="col-lg-6 noticias-mais pt-4">
										<?php
										$open = true;
										} ?>
										<a href="<?php the_permalink(); ?>" class="mb-5 item-noticia">
											<div class="text-white-50">
												<span class="tipo-noticia fz-10 font-weight-bold py-1 px-2 border mr-3">CLIPPING</span>
												<small><time><?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></time> | <span id="autor">Tribuna do Norte</span></small>
												<span class="text"><?php the_title(); ?></span>
											</div>
										</a>
										<?php
									}
									$count++;
								}
								if ($open) { ?>
								<div class="text-right mt-5">
									<a href="#" class="text-en-yellow-dark font-weight-bold">
										<i class="fas fa-arrow-circle-right"></i>
										VER TUDO
									</a>
								</div>
							</div>
								<?php
								}
							}
						?>
					</div>
				</div>
			</section>


			<section class="sec-convidados position-relative overflow-hidden">
				<div class="container-fluid container-lg">
					
					<h2 class="title text-center">CONVIDADOS</h2>
					
					<div class="row mt-5">
						<div class="convidados d-contents">
						<?php
							$convidados = new WP_Query(array(
								"post_type" => "convidados",
								"post_per_page" => 3
							));

							if($convidados -> have_posts()) {
								while ($convidados -> have_posts()) {
									$convidados -> the_post(); ?>
								<div class="col-md-4">
									<div class="my-3 my-lg-0">
										<img src="<?php the_field('convidado-foto'); ?>" alt="<?php the_title(); ?>" class="img-fluid w-100" />
										<div class="d-flex flex-column invite">
											<span class="text-uppercase"><?php the_title(); ?></span>
											<span><?php the_field('convidado-sobre'); ?></span>
										</div>
									</div>
								</div>
								<?php }
							}
						?>
						</div>
					</div>
				</div>
			</section>

			<section class="sec-edicoes-anteriores">
				<div class="container">
					<h2 class="font-weight-bolder fz-28">EDIÇÕES ANTERIORES</h2>
					<p>Faça download dos anais das edições anteriores. Os arquivos estão disponíveis em pdf.</p>
					<div>
						<a href="http://localhost/wordpress/wp-content/uploads/2020/07/exemplo.pdf" target="_blank" class="btn-edition">
							<strong>2016</strong>
							<small>Download</small>
						</a>
						<a href="#" class="btn-edition">
							<strong>2017</strong>
							<small>Download</small>
						</a>
						<a href="#" class="btn-edition">
							<strong>2018</strong>
							<small>Download</small>
						</a>
						<a href="#" class="btn-edition disabled">
							<strong>2019</strong>
							<small><i>aguardando <br> publicação</i></small>
						</a>
					</div>
				</div>
			</section>
		</main>

			<?php get_footer(); ?>	