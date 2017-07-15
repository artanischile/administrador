<?php //print_r($info)?>

<section class="product-page page fix"><!--Start Product Details Area-->
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
						<a href="#"><img src="img/shop-add-1.jpg" alt=""></a>
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
           	<div class="col-sm-6">
				<div class="details-pro-tab">
			<!-- Tab panes -->
					<div class="tab-content details-pro-tab-content">
						<div class="tab-pane fade in active" id="image-1">
							<div class="simpleLens-big-image-container">
								<a class="simpleLens-lens-image" >
									<img src="<?php echo base_url('assets/frontend/')?>img/productos/detalle/<?php echo $info->nombre_imagen?>" alt="" class="simpleLens-big-image">
								</a>
							</div>
						</div>
						
						
						
					</div>
					<!-- Nav tabs -->
					<ul class="tabs-list details-pro-tab-list" role="tablist">
						<li class="active"><a href="#image-1" data-toggle="tab"><img src="img/single-product/thumb-1.jpg" alt="" /></a></li>
						<li><a href="#image-2" data-toggle="tab"><img src="img/single-product/thumb-2.jpg" alt="" /></a></li>
						<li><a href="#image-3" data-toggle="tab"><img src="img/single-product/thumb-3.jpg" alt="" /></a></li>
						<li><a href="#image-4" data-toggle="tab"><img src="img/single-product/thumb-4.jpg" alt="" /></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="shop-details">
					<!-- Product Name -->
					<h2><?php echo $info->producto?></h2>
					<!-- Product Ratting -->
					<!--<div class="pro-ratting">
						<i class="on fa fa-star"></i>
						<i class="on fa fa-star"></i>
						<i class="on fa fa-star"></i>
						<i class="on fa fa-star"></i>
						<i class="on fa fa-star-half-o"></i>
					</div>-->
					<h2><?php echo number_format($info->valor_en_puntos,0,',','.')   ?></h2>
					
					<h5>Disponible - <span>En Stock</span></h5>
					<h6>QUICK OVERVIEW</h6>
					<p><?php echo $info->descripcion   ?></p>
					
					<div class="review">
					
					</div>
					<div class="action-btn" style="float: right;">
						<a href="#"><i class="fa fa-shopping-cart"></i></a>
					
					</div>
				</div>
			</div>
          
          </div>
		</div>
	</div>
</section><!--End Product Details Area-->
<?php $this->load->view('frontend/home/weekly',  FALSE); ?>