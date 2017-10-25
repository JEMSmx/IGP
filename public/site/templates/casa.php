<?php include('./_head.php'); ?>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false'></script>
	<body class="no-sidebar">
		<div id="page-wrapper">
			<!-- Header -->
			<?php $image=$page->images->first(); ?>
				<div id="header-wrapper" class="wrapper" style="background-image: url('<?php echo $image->url; ?>')">
					<div id="header">
											<!-- Logo -->
							<div id="logo" >
                <h1 style="line-height: 1.2;"><?=$page->title;?></h1>
							</div>

						<!-- Nav -->
							<?php include('./_nav.php'); ?>
					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2" style="padding-top:3em;">
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									
                  
                  <header class="style1">
										<h2 style="margin-top: .75em;"><?=$casa->categories->title; ?> - <?=$page->select2->value;?>  <br> <?=$page->price;?>  mxn</h2>
										<p>
                      <strong><?=$page->title2;?>  - <?=$page->title1;?> </strong>
                      <br>
                      <?=$page->url1;?> 
                      <br>
                      Area: <?=$page->area;?>  mt<sup>2</sup>
								    </p>
									</header>
									
				<div id="owl-exa" class="owl-carousel owl-theme" style="    margin-bottom: 2em;">
				<?php foreach ($page->images as $image) { ?>
					<div class="item" style="width:auto"><img src="<?=$image->url;?>" alt="" style="height:400px;width:600px;"></div>
				<?php } ?>
                  </div>
									
									<?=$page->body;?> 
								</article>
								
							</div>

					</div>
					<?php 
$map = $modules->get('MarkupGoogleMap');
echo $map->render($page, 'location');
?>
				</div>


<!--  Footer  -->
			<div id="footer-wrapper" class="wrapper">
					<div class="title">Agendar Cita</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>Te gustaría conocer la propiedad</h2>
							<p>
								Llena un pequeño formulario, o marcanos por teléfono
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
		    <script src="<?php echo $config->urls->templates ?>assets/js/owl.carousel.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/main.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/skel.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/skel-viewport.min.js"></script>
			<script src="<?php echo $config->urls->templates ?>assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			
			<script>
        jQuery(document).ready(function($) {
          $(".owl-carousel").each(function(index, el) {
            var containerHeight = $(el).height();
            $(el).find("img").each(function(index, img) {
              var w = $(img).prop('naturalWidth');
              var h = $(img).prop('naturalHeight');
              $(img).css({
                'width': Math.round(containerHeight * w / h) + 'px',
                'height': containerHeight + 'px'
              });
            }),
            $(el).owlCarousel({
              autoWidth: true,
              margin:17,
              loop:true,
                nav:false,
                center: true,
                autoplay: true,
                video:true,
                autoplayTimeout:2999,
                smartSpeed: 1000,
                autoplayHoverPause:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1,
                        dots: false
                    },
                    1000:{
                        items:1,
                        dots: false
                    }
                }
            });
          });
        });
      </script>
			<script>
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel();
        });
      </script>
			

	</body>
</html>