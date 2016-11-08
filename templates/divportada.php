    
			<div class="pageSection pageSection-noticias" style="margin-top:4%;">
				<div class="container">
					<h2 class="pageSection-title1 text-center noticias-title">&Uacute;ltimas<strong> Noticias</strong></h2>
					<div id="noticias-carousel" class="util-carousel features-carousel">
						
                        <?php 
							include('../src/dbagencia.php');
							$result=mysql_query("SELECT * FROM boletines WHERE publicar='1' ORDER BY fecha DESC LIMIT 8");
while($row = mysql_fetch_array($result)) {
							$imagenArticulo=substr($row['fecha'],2,2)."".substr($row['fecha'],5,2)."".$row['id_boletin']."-1.jpg";
							
							$fecha=explode('-',$row['fecha']);
							
						?>
                        <div class="item">
							 <?php if (file_exists("../../extension/agencia/images/boletines/".$imagenArticulo.".jpg")){ ?>
							<a href="#">
								<img src="../../extension/agencia/images/boletines/<?php echo $imagenArticulo; ?>.jpg" alt="<?php echo $row['cabeza']; ?>"  /> <?php } else{ ?>
                                 <a href="#" target="_top"><img src="../../extension/agencia/images/boletines/boletin404.jpg" alt="<?php echo $row['cabeza']; ?>"  width="250" height="300" /> <?php } ?>
								<span class="text-muted m-l-sm pull-right">
        	<i class="fa fa-calendar-o"></i><small><small>
            <?php echo $fecha[2]."&bull; ".$fecha[1]."&bull; ".$fecha[0]; ?>	</small></small>	</span>
            <br><br><small><small>
								<a href="http://agencia.unicach.mx/articulo.php?tag=<?php echo base64_encode($row['id_boletin']); ?>" target="_blank"><h4><?php echo substr($row['cabeza'],0,54); ?>...</h4></a></small></small>
								<p>
									<?php echo substr($row['sumario'],0,80)."..."; ?>
								</p>
							</a>
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
					$fechaActual=date('Y-m-d');
					$result=mysql_query("SELECT * FROM carteles WHERE status='A' AND fecha_termino>'".$fechaActual."' ORDER BY id DESC LIMIT 10");
					while($row = mysql_fetch_array($result)) { ?>
						
						<div class="item" style="width:195px;">
                        <?php if (file_exists("../../extension/carteles/".$row['imagen'])){ ?>
							<a href="<?php echo $row['link']; ?>" target="<?php echo $row['target']; ?>"> <img src="../../extension/carteles/<?php echo $row['imagen']; ?>" alt="<?php echo $row['titulo']; ?>"  /><span></span></a> <?php } else{ ?>
                           <a href="<?php echo $row['link']; ?>" target="<?php echo $row['target']; ?>"><img src="../../extension/carteles/cartel404.jpg" alt="<?php echo $row['titulo']; ?>"  /></a>
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
					$fechaActual=date('Y-m-d');
					$result=mysql_query("SELECT * FROM cat_libreria ORDER BY rand() LIMIT 10");
					while($row = mysql_fetch_array($result)) { ?>
						<div class="item">
                        
                        <?php if (file_exists("../../extension/libreria/img/".$row['codigo'].".jpg")){ ?>
							<a href="#" target="_top"> <img src="../../extension/libreria/img/<?php echo $row['codigo']; ?>.jpg" alt="<?php echo $row['titulo']; ?>" width="250" height="300"  /><span><small><?php echo $row['titulo']; ?></small></span> </a> <?php } else{ ?>
                           <a href="#" target="_top"><img src="../../extension/carteles/cartel404.jpg" alt="<?php echo $row['titulo']; ?>"  width="250" height="300" /><span><small><?php echo $row['titulo']; ?></small></span> </a>
                            <?php } ?>
                            
						</div>
                        <?php } ?>
					</div>
				</div>
			</div>
			<div align="center" class="clearfix">         
	            
                <a href="https://www.unicach.mx/_/masterpage.php?pag=POSGRA2" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img1','','./images/footer/01.jpg',1)"><img src="./images/footer/01_off.jpg" alt="Posgrados vigentes" height="100" id="img1"></a><a href="http://escolares.unicach.mx/masterpage.php?pag=CALENDARIO_ESCOLAR" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img2','','images/footer/02.jpg',1)"><img src="images/footer/02_off.jpg" alt="Calendario escolar " height="100"  id="img2"></a><a href="http://www.unicach.mx/script/licitaciones/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img3','','images/footer/03.jpg',1)"><img src="images/footer/03_off.jpg" alt="Conoce nuestras licitaciones" height="100" id="img3"></a><a href="http://contraloria-social.unicach.mx/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img4','','images/footer/04.jpg',1)"><img src="images/footer/04_off.jpg" alt="Contraloría Social" height="100" id="img4"></a><a href="http://escolares.unicach.mx/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('img5','','images/footer/05.jpg',1)"><img src="images/footer/05_off.jpg" alt="Direción de Servicios Escolares" height="100" id="img5"></a><a href="http://escolares.unicach.mx/masterpage.php?pag=B3CA5_VIG3NT35" title="Becas vigentes" onMouseOver="MM_swapImage('img6','','images/footer/06.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/footer/06_off.jpg" alt="" height="100" id="img6"></a>
	        </div>