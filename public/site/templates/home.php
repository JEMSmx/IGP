<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>IGP | Inmobiliaria, planeación, consultoría, desarrollo de negocios inmobiliarios y administración de propiedades</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="/site/templates/images/favicon.png" type="image/x-icon">
        <link rel="icon" href="/site/templates/images/favicon.png" type="image/x-icon">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/sass/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
			<?php $image=$page->images->first(); ?>
				<div id="header-wrapper" class="wrapper" style="background-image: url('<?php echo $image->url; ?>')">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
							  <img src="<?php echo $config->urls->templates ?>images/igp-logo-white.png" alt="IGP Inmobiliaria y gestión partrimonial">
								<h1><?= $page->title; ?></h1>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="/">Inicio</a></li>
									
									<li>
									    <a href="/#servicios">Servicios</a>
									    <ul>
											<li><a href="servicios/administracion-de-propiedades/">Propiedades</a></li>
											<li><a href="servicios/comercializacion-y-promocion-de-patrimonios/">Patrimonios</a></li>
											<li><a href="servicios/planeacion-desarrollo-de-negocios-inmobiliarios/">Inmobiliarios</a></li>
										</ul>
									</li>
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

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title"><?= $page->title1; ?></div>
					<section id="intro" class="container">
						<p class="style1"><?= $page->text1; ?></p>
						<p class="style2">
							<?= $page->text2; ?>
						</p>
<!--
						<p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
						free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
						your personal or commercial projects &ndash; just be sure to credit us!</p>
						<ul class="actions">
							<li><a href="#" class="button style3 big">Proceed</a></li>
						</ul>
-->
					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div id="servicios" class="title"><?= $page->title2; ?></div>
					<div id="main" class="container">
						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2><?= $page->text3; ?></h2>
								</header>
								<div class="feature-list">
									<div class="row">
									<?php $servicios=$pages->find("template=servicio, sort=sort"); 
              								foreach ($servicios as $servicio) { ?> 
									<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-refresh"><?=$servicio->title;?></h3>
												<?php $texto=$servicio->title1.' '.$servicio->text1; ?>
												<p><?= substr($texto, 0, 158).'...'; ?> <br><a href="<?=$servicio->url;?>">Leer mas</a></p>
											</section>
										</div>
									<?php } ?>
									</div>
								</div>
								<ul class="actions actions-centered">
									<li><a href="#contacto" class="button style1 big">Contáctanos</a></li>
								</ul>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title"><?= $page->title3; ?></div>
					<header class="style1" style="padding-top: 0;">
            <h3>
              <?= $page->text4; ?><br>
             <a onclick="actualizar('renta'); return false;" href="/casas/?tipo=renta" class="link-light" id="renta">Propiedades en Renta</a> - <a onclick="actualizar('venta'); return false;" href="/casas/?tipo=venta" class="link-light" id="venta">Propiedades en Venta</a> - <a href="" class="link-light">Propiedades AMPI</a></h3>
          </header>
					<div id="highlights" class="container">
						<div class="row 150% products-container">
              
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
									<li><a href="/casas" class="button style1 big">Ver Mas</a></li>
								</ul>
								
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div id="contacto" class="title"><?= $page->title4; ?></div>
					<div id="footer" class="container">
						<header class="style1">
							<h2><?= $page->titleContact; ?></h2>
							<p>
								<?= $page->subtitleContact; ?>
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

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/skel.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/skel-viewport.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo $config->urls->templates ?>assets/js/main.js"></script>
			<script type="text/javascript">
			function actualizar(tipo){
				$.ajax({
                        url: '/data',
                        data: {tipo:tipo},
                        type: 'post',
                        cache: false,
                        async: true,
                        dataType: 'html',
                        beforeSend: function(jqXHR) {
                          jqXHR.overrideMimeType("text/html;charset=UTF-8");
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                          //alert("Error\n"+ jqXHR.responseText);
                          alert("Error");
                        },
                        success: function(data) {
                        	console.log(data);
                             $('#highlights').html(data);
                             $('#venta').removeClass('link-strong');
                             $('#renta').removeClass('link-strong');
                             $("#"+tipo).addClass('link-strong');
                        },complete: function() {
				           
				          }
				       });
			}
				
			</script>
	</body>
</html>