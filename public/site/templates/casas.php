<?php $tipo=$input->get->tipo; ?>
<?php include('./_head.php'); ?>
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
							<?php include('./_nav.php'); ?>

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

						</div>
					</div>

					</div>
				</div>
<?php include('./_foot.php'); ?>