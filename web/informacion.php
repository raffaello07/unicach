<?php 
	date_default_timezone_set("America/Mexico_City"); 
	include('../templates/divheader.php');


	$grupo = base64_decode(isset($_GET['tag']) ? $_GET['tag'] : NULL);
	include('../src/dbconex.php');
	$result=mysql_query("SELECT *FROM cat_header where url_friendly='".$grupo."' order by rand ()");
		$vuelta=0;
		while($row = mysql_fetch_array($result)) {
			if ($vuelta==0){
				$imgHeader=$row['imagen']; 
			}
		}
		
	?>
<body class="about" style="background-image: url(images/header/<?php echo $imgHeader; ?>); background-repeat:no-repeat;">
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
	   
	   $result_sub=mysql_query("SELECT * FROM cat_informacion WHERE url_friendly='".$grupo."' ORDER BY id_menu asc");
	   while($row_sub = mysql_fetch_array($result_sub)) {
		   	$tituloContenido=$row_sub['tab_nombre'];
			$contenido=$row_sub['tab_contenido'];
			$idPertenece=$row_sub['id_menu'];
		   }
		
	   ?>
    </header>
    <main>
	    <div class="container">
	        <div class="row" style="margin-top: 150px;">
	            <nav id="nav-sub-container" class="clearfix">
	                <ul id="nav-sub">
	                <?php 
					$result_sub=mysql_query("SELECT * FROM cat_informacion WHERE id_menu='".$idPertenece."' AND status='1' ORDER BY orden asc");
		   			while($row_sub = mysql_fetch_array($result_sub)) { 
						if ($row_sub['url']==NULL){
					?>
	                    <li class="<?php if ($grupo==$row_sub['url_friendly']){ echo 'current-menu-item'; }?>"><a href="./informacion.php?tag=<?php echo base64_encode($row_sub['url_friendly']);?>"><small><?php echo $row_sub['tab_nombre']; ?></small></a></li>
	                    <?php }else{ ?>
	                    <li class="<?php if ($grupo==$row_sub['url_friendly']){ echo 'current-menu-item'; }?>"><a href="<?php echo $row_sub['url'];?>" target="<?php echo $row_sub['target']; ?>"><small><?php echo $row_sub['tab_nombre']; ?></small></a></li>
	                    <?php } }?>
	                   
	                </ul>
	            </nav>
	        </div>
	        <div class="row">
	            <div class="col-lg-12">
	                <article class="static-page">
	                    <h1 id="main-title"><?php echo $tituloContenido; ?></h1><hr>
	                    <?php echo $contenido; ?>
	                    
	                </article>
	            </div>
	        </div>    
	            <!--
	            <div id="sidebar">
	                <aside class="widget-container">
	                    <div class="widget-wrapper clearfix">
					        <h3 class="widget-title">Submenu</h3>
	                        <ul>
	                            <li><a href="#"></a></li>
	                            
	                        </ul>
	                    </div>
	                </aside>
	                </div>
	                -->
	            </div>
	        </div>
	    </div>
    </main>
     <?php include('../templates/divfooter.php'); ?>
</body>
</html>