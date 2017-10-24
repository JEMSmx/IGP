<?php $tipo=$input->get->tipo; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>IGP | Inmobiliaria, planeación, consultoría, desarrollo de negocios inmobiliarios y administración de propiedades</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/sass/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
                <h1 style="line-height: 1.2;"><? if($tipo=='renta') echo 'Propiedades en renta'; else if($tipo=='venta') echo 'Propiedades en venta'; else echo 'Propiedades'; ?></h1>
                <p>Contamos con una opción que se adapta a tus necesidades</p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="/">Inicio</a></li>
									
									<li><a href="/#servicios">Servicios</a></li>
									<li>
										<a href="/casas">Nuestras propiedades</a>
										<ul>
											<li><a href="/casas/?tipo=venta">Venta</a></li>
											<li><a href="/casas/?tipo=renta">Renta</a></li>
											<li><a href="/casas">Mas propiedades</a></li>
										</ul>
									</li>
									<li><a href="/servicios/consultoria-ambiental-sas/">Consultoría ambiental</a></li>
									<li><a href="/#contacto">Contacto</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div id="main" class="container">

						<div id="highlights" class="container">
						<div class="row 150% products-container">
              <!--  Casa  -->
						<?php 
						if($tipo)
							$casas=$pages->find("template=casa, sort=-published, select2.value=$tipo"); 
						else
							$casas=$pages->find("template=casa, sort=-published"); 
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

						</div>
					</div>

					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">Contacto</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>¿No encontraste lo que buscabas?</h2>
							<p>
								Contamos con mas propiedades que son parte del catalogo del AMPI <a href="">consultálo aquí</a>.
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