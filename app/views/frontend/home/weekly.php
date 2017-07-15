<div class="featured-product section fix"><!--start Featured Product Area-->
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2>Productos Relacionados</h2>
				<div class="underline"></div>
			</div>
			<div class="col-sm-12">
				<!-- Featured slider Area Start -->
				<div class="feature-pro-slider owl-carousel">
                   <?php foreach ($infoP as $producto):?>
					<!-- Single Product Start -->
					<div class="product-item fix">
						<div class="product-img-hover">
							<!-- Product image -->
							<a href="<?php echo base_url('/products/details')?>/<?php echo strtolower(str_replace(' ','-',$producto->productourl))?>" class="pro-image fix"><img src="<?php echo base_url('assets/frontend/')?>img/productos/detalle/<?php echo $producto->nombre_imagen?>" alt="product" /></a>
							<!-- Product action Btn -->
							<div class="product-action-btn">
								<a class="quick-view" href="<?php echo base_url('/products/details')?>/<?php echo strtolower(str_replace(' ','-',$producto->productourl))?>"><i class="fa fa-search"></i></a>
								<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
								<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
						<div class="pro-name-price-ratting">
							<!-- Product Name -->
							<div class="pro-name">
								<a href="<?php echo base_url('/products/details')?>/<?php echo strtolower(str_replace(' ','-',$producto->productourl))?>"><?php echo $producto->producto?></a>
							</div>
							<!-- Product Ratting -->
							<div class="pro-ratting">
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star-half-o"></i>
							</div>
							<!-- Product Price -->
							<div class="pro-price fix">
								<p><span class="new"><?php echo  number_format($producto->valor_en_puntos,0,',','.') ?> pts.</span></p>
							</div>
						</div>
					</div><!-- Single Product End -->
					<?php endforeach;   ?>
					
				</div><!-- Featured slider Area End -->
			</div>
		</div>
	</div>
</div><!--End Featured Product Area-->