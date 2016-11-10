<?php 
	header('Content-Type: text/html; charset=iso-8859-1');
	date_default_timezone_set("America/Mexico_City"); 
	include('../templates/divheader.php');


	$grupo = base64_decode(isset($_GET['tag']) ? $_GET['tag'] : NULL);
	include('../src/dbconex.php');
	$result=$db_conexion->query("SELECT *FROM cat_header where url_friendly='".$grupo."' order by rand ()");
		$vuelta=0;
		while($row = $result->fetch_assoc()) {
			if ($vuelta==0){
				$imgHeader=$row['imagen']; 
			}
		}
		
	?>
<body class="about about-body" style="background-image: url(images/header/<?php echo $imgHeader; ?>);">
	<header id="main-header" class="clearfix">
        <div id="header-full" class="clearfix">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</a>
                <a href="./" id="logo"><img src="./images/logo.png" data-retina="images/logo-retina.png" alt="Universidad de Ciencias y artes de Chiapas" /></a>
                
              <?php  include('../templates/divredes.php');?>
                
            </div>
        </div>
       <?php
       $grupo = base64_decode(isset($_GET['tag']) ? $_GET['tag'] : NULL);
	   include('../templates/divmenu.php');
	   
	   $result_sub=$db_conexion->query("SELECT * FROM cat_informacion WHERE url_friendly='".$grupo."' ORDER BY id_menu asc");
	   while($row_sub = $result_sub->fetch_assoc()) {
		   	$tituloContenido=$row_sub['tab_nombre'];
			$contenido=$row_sub['tab_contenido'];
			$idPertenece=$row_sub['id_menu'];
		   }
		
	   ?>
    </header>
    <main>
	    <div class="container-fluid">  
	        <div class="row content-row">
		        <div class="col-sm-4 col-md-3 col-lg-2 col-md-offset-1 col-lg-offset-2 lateral navbar">
			        <div class="navbar-header">
						<button type="button" class="navbar-toggle lateral-submenu-toggle" data-toggle="collapse" data-target="#colapsubmemenu">
							<i class="fa fa-chevron-down" aria-hidden="true"></i>
						</button>
					</div>
			        <ul class="lateral-submenu collapse navbar-collapse" id="colapsubmemenu">
				        <?php 
						$result_sub=$db_conexion->query("SELECT * FROM cat_informacion WHERE id_menu='".$idPertenece."' AND status='1' ORDER BY orden asc");
			   			while($row_sub = $result_sub->fetch_assoc()) { 
							if ($row_sub['url']==NULL){
						?>
	                	<li class="lateral-submenu-item"><a href="./informacion.php?tag=<?php echo base64_encode($row_sub['url_friendly']);?>" class="lateral-submenu-link <?php if ($grupo==$row_sub['url_friendly']){ echo ' lateral-submenu-active'; }?>"><?php echo $row_sub['tab_nombre']; ?></a></li>
	                	<?php }else{ ?>
						<li class="lateral-submenu-item"><a href="<?php echo $row_sub['url'];?>" target="<?php echo $row_sub['target']; ?>" class="lateral-submenu-link <?php if ($grupo==$row_sub['url_friendly']){ echo ' lateral-submenu-active'; }?>"><?php echo $row_sub['tab_nombre']; ?></a></li>
						<?php } }?>
	                
	                    	                   
	                </ul>
		        </div>
	            <div class="col-sm-8 content-col">
		            <div class="col-sm-12 col-md-11 col-lg-10">
		                <article class="static-page">
		                    <h1 class="content-title"><?php echo $tituloContenido; ?></h1><hr>
							<?php echo $contenido; ?>
		                </article>
	                </div>
	            </div>
	        </div>
	    </div>
    </main>
     <?php include('../templates/divfooter.php'); ?>
</body>
</html>