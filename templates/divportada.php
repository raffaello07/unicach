    
			<div class="pageSection pageSection-noticias">
				<div class="container">
					<h2 class="pageSection-title1 text-center noticias-title">&Uacute;ltimas<strong> Noticias</strong></h2>
					<div id="noticias-carousel" class="util-carousel features-carousel">
						
                        <?php 
							while ($boletin = $boletinesResultado->fetch_assoc()){
								$imagenArticulo=substr($boletin['fecha'],2,2)."".substr($boletin['fecha'],5,2)."".$boletin['id_boletin']."-1.jpg";
								$fecha=explode('-',$boletin['fecha']);
								 ?>
						<div class="item">
                         
                            
                             <?php if (file_exists("../../extension/agencia/images/boletines/".$imagenArticulo)){ ?>
							<a href="http://agencia.unicach.mx/articulo.php?tag=<?php echo base64_encode($boletin['id_boletin']); ?>" target="_blank">
								<img src="../../extension/agencia/images/boletines/<?php echo $imagenArticulo; ?>" alt="<?php echo $boletin['cabeza']; ?>"  /></a> <?php } else{ ?>
                                 <a href="http://agencia.unicach.mx/articulo.php?tag=<?php echo base64_encode($boletin['id_boletin']); ?>" target="_blank"><img src="../../extension/agencia/images/boletines/boletin404.jpg" alt="<?php echo $boletin['cabeza']; ?>"  width="250" height="300" /> </a><?php } ?>
								<span class="text-muted m-l-sm pull-right">
        	<i class="fa fa-calendar-o"></i><small><small>
            <?php echo $fecha[2]."&bull; ".$fecha[1]."&bull; ".$fecha[0]; ?>	</small></small>	</span>
            <br><br><small><small>
								<a href="http://agencia.unicach.mx/articulo.php?tag=<?php echo base64_encode($boletin['id_boletin']); ?>" target="_blank"><h4><?php echo $boletin['cabeza']; ?></h4></a></small></small>
								<p>
									<?php echo substr($boletin['sumario'],0,80)."..."; ?>
								</p>
							
						</div>
						<?php }  ?>                  
					</div>
				</div><!-- container -->
			</div>	
			
			<div class="pageSection pageSection-evenetos">
				<div class="container">
					<h2 class="pageSection-title1 text-center eventos-title">Carteles</h2>
					<div id="eventos-carousel" class="util-carousel top-nav-box">
                    <?php 
							while ($cartel = $cartelesResultado->fetch_assoc()){ ?>
								<div class="item">                              
                                                            
                                <?php if (file_exists("../../extension/carteles/".$cartel['imagen'])){ ?>
							<a href="<?php echo $cartel['link']; ?>" target="_top"> <img src="../../extension/carteles/<?php echo $cartel['imagen']; ?>" alt="<?php echo $cartel['titulo']; ?>" width="250" height="300"  /> </a> <?php } else{ ?>
                           <a href="<?php echo $cartel['link']; ?>" target="_top"><img src="../../extension/carteles/cartel404.jpg" alt="<?php echo $cartel['titulo']; ?>"  width="250" height="300" /></a>
                            <?php } ?>								
								</div>
							<?php } ?>
					</div>
				</div>
			</div>
			
			<div class="pageSection pageSection-uv">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-6">
							<img src="images/logo_uv.png" class="img-responsive center-block" alt="Logo Universidad Virtual" style="max-height: 140px;">
						</div>
						<div class="col-sm-8 col-md-6 text-center uv-col">
							<h2 class="pageSection-title1 text-center uv-title">Universidad Virtual</h2>
							<p class="uv-parrafo">Educaci&oacute;n a distancia mas cerca de ti</p>
							<a class="btn btn-primary uv-btn" href="https://www.unicachvirtual.mx/siva/" target="_blank"> Entrar </a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="pageSection pageSection-libros">
				<div class="container">
					<h2 class="pageSection-title1 text-center libros-title">Publicaciones</h2>
					<div id="libros-carousel" class="util-carousel top-nav-box">
                    <?php 
							while ($libro = $librosResultado->fetch_assoc()){ ?>
								<div class="item">
                                
                                <?php if (file_exists("../../extension/libreria/img/".$libro['codigo'].".jpg")){ ?>
							<a href="#" target="_top"> <img src="../../extension/libreria/img/<?php echo $libro['codigo']; ?>.jpg" alt="<?php echo $libro['titulo']; ?>" width="250" height="300"  /><span><small><small><?php echo $libro['titulo']; ?></small></small></span> </a> <?php } else{ ?>
                           <a href="#" target="_top"><img src="../../extension/carteles/cartel404.jpg" alt="<?php echo $libro['titulo']; ?>"  width="250" height="300" /><span><small><small><?php echo $libro['titulo']; ?></small></small></span> </a>
                            <?php }  ?>
                            
								
								</div>
								 
							<?php } ?>
					</div>
				</div>
			</div>
			
			<div class="pageSection pageSection-cuid">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-md-6 cuid-logo">
							<img src="images/cuid2.png" class="img-responsive center-block cuid-img" alt="Logo CUID" style="max-height: 140px;">
						</div>
						<div class="col-sm-4 col-md-6 text-center cuid-col">
							<p class="cuid-parrafo">Encuentra la informaci&#243n que buscas en un click</p>
							<a class="btn btn-primary cuid-btn" href="http://cuid.unicach.mx" target="_blank"> Entrar </a>
						</div>
					</div>
				</div>
			</div>
			
			<div align="center" class="clearfix">         
	            
                <a href="https://www.unicach.mx/_/masterpage.php?pag=POSGRA2" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img1','','./images/footer/01.jpg',1)"><img class="bottom-img" src="./images/footer/01_off.jpg" alt="Posgrados vigentes" height="100" id="img1"></a><a href="http://escolares.unicach.mx/masterpage.php?pag=CALENDARIO_ESCOLAR" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img2','','images/footer/02.jpg',1)"><img class="bottom-img" src="images/footer/02_off.jpg" alt="Calendario escolar " height="100"  id="img2"></a><a href="http://www.unicach.mx/script/licitaciones/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img3','','images/footer/03.jpg',1)"><img class="bottom-img" src="images/footer/03_off.jpg" alt="Conoce nuestras licitaciones" height="100" id="img3"></a><a href="http://contraloria-social.unicach.mx/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img4','','images/footer/04.jpg',1)"><img class="bottom-img" src="images/footer/04_off.jpg" alt="Contraloría Social" height="100" id="img4"></a><a href="http://escolares.unicach.mx/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img5','','images/footer/05.jpg',1)"><img class="bottom-img" src="images/footer/05_off.jpg" alt="Direción de Servicios Escolares" height="100" id="img5"></a><a href="http://escolares.unicach.mx/masterpage.php?pag=B3CA5_VIG3NT35" title="Becas vigentes" onMouseOver="MM_swapImage('img6','','images/footer/06.jpg',1)" onMouseOut="MM_swapImgRestore()"><img class="bottom-img" src="images/footer/06_off.jpg" alt="" height="100" id="img6"></a>
	        </div>