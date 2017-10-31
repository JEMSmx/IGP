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
							  <p class="location"><?=$casa->categories->title; ?> - <?=$casa->select2->value; ?></p>
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
<?php include('./_foot.php'); ?>