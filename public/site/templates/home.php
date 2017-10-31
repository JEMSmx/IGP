<?php include('./_head.php'); ?>
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
							<?php include('./_nav.php'); ?>

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
												<h3><?=$servicio->title;?></h3>
												<?php $texto=$servicio->title1.' '.$servicio->text1; ?>
												<p><?= substr($texto, 0, 158).'...'; ?> <br><a href="<?=$servicio->url;?>">Leer mas</a></p>
											</section>
										</div>
									<?php } ?>
									</div>
								</div>
								<ul class="actions actions-centered">
									<li><a  href="#contacto" class="button style1 big scroll">Contáctanos</a></li>
								</ul>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div id="casas" class="wrapper style3">
					<div class="title"><?= $page->title3; ?></div>
					<header class="style1" style="padding-top: 0;">
            <h3>
              <?= $page->text4; ?><br>
             <a onclick="actualizar('renta'); return false;" href="/casas/?tipo=renta" class="link-light" id="renta">Propiedades en Renta</a> - <a onclick="actualizar('venta'); return false;" href="/casas/?tipo=venta" class="link-light" id="venta">Propiedades en Venta</a> - <a href="http://www.ampiguadalajara.com.mx/iframe/?llave=%20883200dc0951372716e4c2a3147f31bf" class="link-light">Propiedades AMPI</a></h3>
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
							  <div style="border: 1px solid #0000002b;padding: 8px;">
    							      <div class="img-container" style="background-image: url('<?php echo $img->url; ?>')" >
    							    <div class="hover">
    							      <p>Más Información</p>
    							    </div>
    							  </div>
    							  <h3><?=$casa->title; ?></h3>
    							  <p class="location"><?=$casa->title1; ?></p>
    							  <p class="location"><?=$casa->categories->title; ?> - <?=$casa->select2->value; ?></p>
    							  <p class="details">$<?=$casa->price; ?> mxn</p>
                    			  <p class="details">Area: <?=$casa->area; ?> m²</p>
							  </div>
							</a>
             <?php } ?>
							
							<ul class="actions actions-centered" style="width: 100%;">
									<li><a href="/casas" class="button style1 big">Ver Mas</a></li>
								</ul>
								
						</div>
					</div>
				</div>
<?php include('./_foot.php'); ?>