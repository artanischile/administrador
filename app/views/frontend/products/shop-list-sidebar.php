<?php 
  //echo "<pre>";
  // print_r($info);

?>
<div class="section-title">
	<h2>PRODUCTOS</h2>
	<div class="underline"></div>
</div>
<div class="shop-product-area section fix"><!--Start Shop Area-->
	<div class="container">
		<div class="row">
			<div class="col-md-3 hidden-xs">
				<div class="shop-sidebar fix">
					<!-- single-sidebar start -->
					<div class="sin-shop-sidebar shop-category">
						<h2>CATEGORIAS</h2>
						<ul>
							<li><a href="#">TECHNO SHOW</a></li>
							<li><a href="#">MODA</a></li>
							<li><a href="#">TECNOLOGIA</a></li>
							<li><a href="#">HOGAR</a></li>
							<li><a href="#">INFANTIL</a></li>
							<li><a href="#">GOURMET</a></li>
							<li><a href="#">BELLEZA</a></li>
							<li><a href="#">ENTRETENIMIENTO</a></li>
                            <li><a href="#">DEPORTE</a></li>
                            <li><a href="#">PROMOCIONES</a></li>
                            <li><a href="#">GIFT CARD</a></li>
                            <li><a href="#">INVIERNO</a></li>
                            <li><a href="#">HOMBRES</a></li>
                            <li><a href="#">DOLARES</a></li>
                            
						</ul>
					</div>
					<!-- single-sidebar end -->
					<!-- single-sidebar start -->
					<div class="sin-shop-sidebar shop-add">
						
					</div>
					<!-- single-sidebar end -->
					<!-- single-sidebar start -->
					<div class="sin-shop-sidebar shop-brands">
						<h2>POR PUNTOS</h2>
						<ul>
							<li><a href="#">1-5000</span></a></li>
							<li><a href="#">5001-10000</a></li>
							<li><a href="#">10001 - 15000</a></li>
							<li><a href="#">15001 - 20000</a></li>
							<li><a href="#">20001 Y MAS</a></li>
						
						</ul>
					</div>
					<!-- single-sidebar end -->
					<!-- single-sidebar start 
					<div class="sin-shop-sidebar product-price-range">
						<h2>Price</h2>
						<div class="slider-range-container">
							<div id="slider-range"></div>
							<p>
								<input type="text" id="price-amount" readonly>
							</p>
						</div>
					</div>-->
					<!-- single-sidebar end -->
					<!-- single-sidebar start -->
					<!--<div class="sin-shop-sidebar shop-add">
						<a href="#"><img src="<?php echo base_url('assets/frontend/')?>img/shop-add-2.jpg" alt=""></a>
					</div>-->
					<!-- single-sidebar end -->
					<!-- single-sidebar start -->
					<!--<div class="sin-shop-sidebar shop-tags">
						<h2>Tags</h2>
						<ul>
							<li><a href="#">JEWELRY</a></li>
							<li><a href="#">Rings</a></li>
							<li><a href="#">EARRINGS</a></li>
							<li><a href="#">BRACELETS</a></li>
							<li><a href="#">Necklaces</a></li>
							<li><a href="#">Locket</a></li>
							<li><a href="#">Jewelry Sets</a></li>
							<li><a href="#">Churi</a></li>
							<li><a href="#">Watch</a></li>
						</ul>
					</div>-->
					<!-- single-sidebar end -->
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="shop-tool-bar col-sm-12 fix">
						<div class="view-mode">
							<a href="" class="active"><i class="fa fa-th"></i></a>
							<a href=""><i class="fa fa-th-list"></i></a>
						</div>
						<div class="sort-by">
							<span>Ordenar Por</span>
							<select name="sort-by">
								<option selected="selected" value="mercede">Menor Puntaje</option>
								<option value="saab">Mayor Puntaje</option>
							
							</select>
						</div>
						<div class="show-product">
							<span>Mostrar</span>
							<select name="sort-by">
								<option selected="selected" value="mercede">16</option>
								<option value="saab">20</option>
								<option value="mercedes">24</option>
							</select>
							<span>Per Page</span>
						</div>
						<div class="pro-Showing">
							<span>Viendo 1 - 12 de 16 items</span>
						</div>
					</div>
					<div class="shop-products">
                       <?php foreach ($info as $producto):?>
						<!-- Single Product Start -->
						<div class="col-sm-4 fix">
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
										<p><span class="new"><?php echo  number_format($producto->valor_en_puntos,0,',','.') ?></span></p>
									</div>
								</div>
							</div>
						</div><!-- Single Product End -->
                        <?php endforeach ;?>   
						
					
                      
                        
						
						
                       
					
                        
					
                       
					
						<div class="clearfix"></div>
                        
						<!-- Pagination -->
						<div class="pagination">
							<ul>
								<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
								<li class="active"><span>1</span></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">6</a></li>
								<li><a href="#">7</a></li>
								<li><a href="#">8</a></li>
								<li><a href="#">9</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--Start Shop Area-->