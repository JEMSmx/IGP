<nav id="nav">
	<ul itemscope itemtype="http://www.schema.org/SiteNavigationElement">
		<li class="current" itemprop="name"><a href="/" title="Inicio" itemprop="url">Inicio</a></li>
		<li itemprop="name"><a <?= ($page->path != "/") ?  'href="/#servicios"':'class="scroll" href="#servicios"';?>  itemprop="url"  title="Servicios">Servicios</a>
			<ul>
				<?php $services = $pages->get("/servicios"); 
					$children = $services->children;
					foreach($children as $child) { ?>
					<li itemprop="name"><a href="<?= $child->url; ?>" title="<?= $child->title; ?>"><?= $child->title2; ?></a></li>
				<?php } ?>
			</ul>
		</li>
		<li itemprop="name">
			<a <?= ($page->path != "/") ?  'href="/casas"':'class="scroll" href="#casas"';?> title="Nuestras propiedades" itemprop="url">Nuestras propiedades</a>
			<ul>
				<li itemprop="name"><a href="/casas/?tipo=venta" title="Venta" itemprop="url">Venta</a></li>
				<li itemprop="name"><a href="/casas/?tipo=renta" title="Renta" itemprop="url">Renta</a></li>
				<li itemprop="name"><a href="http://www.ampiguadalajara.com.mx/iframe/?llave=%20883200dc0951372716e4c2a3147f31bf" title="Más propiedades" itemprop="url" target="_blank">Mas propiedades</a></li>
			</ul>
		</li>
		<li itemprop="name"><a class="scroll" href="#contacto" title="Contacto" itemprop="url">Contacto</a></li>
	</ul>
</nav>

