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
<?php include('../src/googleanalytics.php'); ?>

	<header id="main-header" class="clearfix">
   
    	<div class="logoHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 brand">
						<a class="brand-link" href="index.php">
							<img src="images/logo.png" class="img-responsive brand-logo" alt="UNICACH Logo">
							<h1 class="brand-name sr-only">Universidad de Ciencias y Artes de Chiapas</h1>
						</a>
					</div>
                
					<?php  include('../templates/divredes.php');?>
            	</div>
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