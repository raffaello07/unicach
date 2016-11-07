<?php 
	date_default_timezone_set("America/Mexico_City"); 
	include('../templates/divheader.php');
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
		<div class="container">
			<div class="row">
				<div class="col-sm-12" style="margin-top: 150px;">

					<script>
						(function() {
							var cx = '000829998739172691271:npeu8eczido';
							var gcse = document.createElement('script');
							gcse.type = 'text/javascript';
							gcse.async = true;
							gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(gcse, s);
						})();
					</script>
					<gcse:searchresults-only></gcse:searchresults-only>
					
				</div>
			</div>
		</div>
    </main>
   <?php include('../templates/divfooter.php'); ?>
</body>
</html>