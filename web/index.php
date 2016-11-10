<?php
	header('Content-Type: text/html; charset=iso-8859-1');
	require_once '../src/dbconex.php';
	require_once '../src/dbagencia.php';
	require_once '../src/libros.php';
	require_once '../src/noticias.php';
	require_once '../src/carteles.php';
	date_default_timezone_set("America/Mexico_City"); 
	include('../templates/divheader.php');
	$grupo = "";
?>

<body class="home">


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
       <?php   include('../templates/divmenu.php'); ?>
                      
    </header>
    <main>
    <?php include('../templates/divslider.php'); ?> 
    
    <div id="content-container">
 
				<?php
					include('../templates/divportada.php'); 
				 ?>
               
    </div>
    </main>
   <?php include('../templates/divfooter.php'); ?>
</body>
</html>