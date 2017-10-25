<?php include('./_head.php'); ?>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
                <h1 style="line-height: 1.2;"><?=$page->title;?></h1>
							</div>

						<!-- Nav -->
							<?php include('./_nav.php'); ?>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div id="main" class="container">
            <header class="style1">
										<h2><?=$page->title1;?></h2>
										<p><?=$page->text1;?></p>
									</header>
						<!-- Content -->
							<div id="content">
								<article class="box post">
									<?=$page->body;?>
								</article>
							</div>

					</div>
				</div>

			<!-- Highlights -->
			<?php if($page->id==1017){ ?>
				<div class="wrapper style3">
					<div class="title">Propiedades</div>
					<div id="highlights" class="container">
						<div class="row 150% products-container">
              <!--  Casa  -->
			<?php $casas=$pages->find("template=casa, sort=-published, limit=8"); 
              		foreach ($casas as $casa) { 
              			$image=$casa->images->first(); 
              			if($image){
              				$img = $image->size(600, 400, array('upscaling' => true, 'cropping' => false, 'quality' => 90));	
              			} ?>
              			<!--  Casa  -->
							<a href="<?=$casa->url;?>" class="products">
							  <div class="img-container" style="background-image: url('<?php echo $img->url; ?>')" >
							    <div class="hover">
							      <p>Más Información</p>
							    </div>
							  </div>
							  <h3><?=$casa->title; ?></h3>
							  <p class="location"><?=$casa->title1; ?></p>
							  <p class="location"><?=$casa->select1->value; ?> - <?=$casa->select2->value; ?></p>
							  <p class="details">$<?=$casa->price; ?> mxn</p>
                			  <p class="details">Area: <?=$casa->area; ?> m²</p>
							</a>
             <?php } ?>
							
							<ul class="actions actions-centered" style="width: 100%;">
									<li><a href="/casas" class="button style1 big">Ver Propiedades</a></li>
								</ul>
								
						</div>
					</div>
				</div>
			<?php } ?>
				

				<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title"><?=$page->title4;?></div>
					<div id="footer" class="container">
						<header class="style1">
							<h2><?=$page->titleContact;?></h2>
							<p>
								<?=$page->subtitleContact;?>
							</p>
						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									<section>
										<form method="post" action="#">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Nombre" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Correo" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Mensaje" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Enviar" /></li>
														<li><input type="reset" class="style2" value="Borrar" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="6u 12u(mobile)">
							<?php $contacto=$pages->find("template=contacto");  ?>
								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-home">Dirección</h3>
													<p>
														<?=$contacto[0]->text1;?>
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-comment">Redes Sociales</h3>
													<p>
														<?=$contacto[0]->redes;?>
													</p>
												</section>
											</div>
										</div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-envelope">Email</h3>
													<p>
														<a href="#"><?=$contacto[0]->title1;?></a>
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-phone">Teléfono</h3>
													<p>
														<a href="tel:333333333"><?=$contacto[0]->title2;?></a>
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; Copyright IGP Mobiliario 2017</li><li>Desarrollada: <a href="www.jems.com.mx">Jems </a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="<?php echo $config->urls->templates ?>assets/js/jquery.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/skel.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/skel-viewport.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo $config->urls->templates ?>assets/js/main.js"></script>

	</body>
</html>