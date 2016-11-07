<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="iso-8859-1" />
	<title>Universidad de Ciencias y Artes de Chiapas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" media="all" href="./style/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="./style/prettyPhoto.css" />
	<!--
    <link href='../../../../fonts.googleapis.com/css_d229e2d1.css' rel='stylesheet' type='text/css' />
    <link href='../../../../fonts.googleapis.com/css_ea4516fe.css' rel='stylesheet' type='text/css' />
	-->
    <link rel="stylesheet" type="text/css" media="all" href="./style/stylemobile.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<!-- <link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" /> -->
	<script src="./script/modernizr.js" type="text/javascript"></script>
	<script src="./script/jquery.js" type="text/javascript"></script>
    <script src="./script/jquery-ui.js" type="text/javascript"></script>
	<script src="./script/jquery.flexslider.js" type="text/javascript"></script>
	<script src="./script/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="./script/jquery.retina.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function (){
        $(window).scroll(function () {
            if ($(document).scrollTop() <= 40) {
                $('#header-full').removeClass('small');
                $('.tabs-blur').removeClass('no-blur');
                $('#main-header').removeClass('small');
            } else {
                $('#header-full').addClass('small');
                $('.tabs-blur').addClass('no-blur');
                $('#main-header').addClass('small');
            }
        });
        
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
			default_width: 600,
			default_height: 320,
			social_tools: false
		});
        $('#slideshow-tabs').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('.slider-tabs.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
        });
		$('a[data-rel]').each(function() {
			$(this).attr('rel', $(this).data('rel'));
		});
		$('img[data-retina]').retina({checkIfImageExists: true});
		$(".open-menu").click(function(){
		    $("body").addClass("no-move");
		});
		$(".close-menu, .close-menu-big").click(function(){
		    $("body").removeClass("no-move");
		});
	});
	</script>
    
    <?php
	$grupo = base64_decode(isset($_GET['tag']) ? $_GET['tag'] : NULL);
	include('lib/dbconex.php');
	$result=mysql_query("SELECT *FROM cat_header where url_friendly='".$grupo."' order by rand ()");
		$vuelta=0;
		while($row = mysql_fetch_array($result)) {
			if ($vuelta==0){
				$imgHeader=$row['imagen']; 
			}
		}
		
	?>
</head>
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
                
              <?php include('lib/divredes.php');?>
                
            </div>
        </div>
       <?php
       $grupo = base64_decode(isset($_GET['tag']) ? $_GET['tag'] : NULL);
	   include('lib/divmenu.php'); 
	   
	   $result_sub=mysql_query("SELECT * FROM cat_informacion WHERE url_friendly='".$grupo."' ORDER BY id_menu asc");
	   while($row_sub = mysql_fetch_array($result_sub)) {
		   	$tituloContenido=$row_sub['tab_nombre'];
			$contenido=$row_sub['tab_contenido'];
			$idPertenece=$row_sub['id_menu'];
		   }
		
	   ?>
    </header>
    
    <div id="content-container">
        <div id="content" class="clearfix" >
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
            <div id="main-content">
                <article class="static-page">
                    <h1 id="main-title"><?php echo $tituloContenido; ?></h1><hr>
                    <?php echo $contenido; ?>
                    
                </article>
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
    <?php include('lib/divfooter.php'); ?>
</body>
</html>