<?php
	$tema = get_bloginfo('template_url');
	$assets = $tema . '/assets';
	
	if(is_front_page()) { ?>
		<footer class="bg-dark py-3 text-white">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="text-center">
							Econaçu - 2020
						</div>
					</div>
				</div>
			</div>
		</footer>
	<?php } ?>

		<script src="https://kit.fontawesome.com/113c46960f.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="<?php echo $assets; ?>/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="<?php echo $assets; ?>/css/owl.carousel.min.css" />
		<script src="<?php echo $assets; ?>/js/owl.carousel.min.js"></script>
		<script src="<?php echo $assets; ?>/js/script.js"></script>

	</body>
</html>

<?php wp_footer(); ?>