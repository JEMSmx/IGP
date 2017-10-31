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
					<form id="formContact">
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
									<a href="mailto:<?=$contacto[0]->title1;?>"><?=$contacto[0]->title1;?></a>
								</p>
							</section>
						</div>
						<div class="6u 12u(mobile)">
							<section>
								<h3 class="icon fa-phone">Teléfono</h3>
								<p>
									<?php $tele = intval(preg_replace('/[^0-9]+/', '', $contacto[0]->title2), 10);  ?>
									<a href="tel:<?=$tele?>"><?=$contacto[0]->title2;?></a>
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
		<ul style="display: flex;justify-content: center;align-items: center;max-width: 500px;margin: 0 auto;">
		<li>&copy; Copyright IGP Mobiliario <?=date('Y');?></li>
		<li><img src="http://www.casasyterrenos.com/articuloscyt/wp-content/uploads/2017/02/ampi.png" style="height: 32px;"></li>
		<li>Desarrollada: <a href="https://www.jems.com.mx">Jems </a></li>
	</ul>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="<?php echo AIOM::JS(array('assets/js/jquery.dropotron.min.js', 'assets/js/skel.min.js', 'assets/js/skel-viewport.min.js', 'assets/js/util.js', 'assets/js/sweetalert.min.js', 'assets/js/main.js')); ?>"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
</body>
</html>