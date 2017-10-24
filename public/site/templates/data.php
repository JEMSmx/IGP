<?php $tipo=$input->post->tipo; ?>
<div class="row 150% products-container">

	<?php $casas=$pages->find("template=casa, sort=-published, limit=8, select2.value=$tipo"); 
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