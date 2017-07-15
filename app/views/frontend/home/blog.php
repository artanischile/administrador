
<div class="blog-area section fix"><!--Start Blog Area-->
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2>TEMAS DE INTERES</h2>
				<div class="underline"></div>
			</div>
			<div class="blog-slider owl-carousel">
				
                 <?php 
                    
                    $mes=array('', 'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic' ); 
                 
                    foreach ($blog as $post):
                    $separar=explode(' ',$post->fecha);    
                    $fecha=explode('-',$separar[0]);
                  
                   
                 ?>
                <div class="single-blog">
					<div class="content fix">
						<a class="image fix" href=""><img src="<?php echo base_url('assets/frontend/')?>img/temas/miniaturas/<?php echo $post->img1 ?>" alt="" />
							<div class="date">
								<h4><?php echo $fecha[2]; ?></h4>
								<h5><?php echo $mes[(int)$fecha[1]]; ?></h5>
							</div>
						</a>
						<h2><a class="title" href="l"><?php echo $post->titulo ?></a></h2>
						<!--<div class="meta">
							<a href="#"><i class="fa fa-pencil-square-o"></i>John Lee</a>
							<a href="#"><i class="fa fa-calendar"></i>2 Days ago</a>
							<a href="#"><i class="fa fa-comments"></i>12 Comments</a>
						</div>-->
						<p><?php echo $post->bajada ?></p>
					</div>
				</div>
			     <?php endforeach;?>
				
			</div>
		</div>
	</div>
</div><!--End Blog Area-->