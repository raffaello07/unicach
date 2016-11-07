<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    
    
<nav id="nav" class="clearfix navbar navbar-default navbar-fixed" >
	<div class="container">
       <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
   		<div id="navbar" class="navbar-collapse collapse">
          <ul id="nav-main" class="nav navbar-nav" >
                    
    	<li class="<?php if ($grupo==NULL){ echo 'current-menu-item'; }  ?>"><a href="./">Inicio</a></li>
        	<?php include('lib/dbconex.php');
			$result_sub=mysql_query("SELECT * FROM cat_informacion WHERE url_friendly='".$grupo."' ORDER BY id_menu asc");
			while($row_sub = mysql_fetch_array($result_sub)) { 
				$perteneceMenu=$row_sub['id_menu'];
			}
			
			$result=mysql_query("SELECT * FROM cat_menu WHERE publicar='1' ORDER BY orden asc");
			while($row = mysql_fetch_array($result)) { ?>
			
            <li class="<?php if ($perteneceMenu==$row['id_menu']){ echo 'current-menu-item'; }  ?>"><a href="<?php if($row['url']==NULL){ echo "#"; }else{ echo $row['url'] ;}?>" target="<?php echo $row['target']; ?>"><?php echo htmlentities($row['titulo']); ?></a>
                            <?php if($row['url']==NULL){ ?>
                                <ul>
                                <?php
								//Para obtener el submenú
							$result_sub=mysql_query("SELECT * FROM cat_informacion WHERE id_menu='".$row['id_menu']."' AND status='1' ORDER BY orden asc");
							while($row_sub = mysql_fetch_array($result_sub)) { 
									if ($row_sub['url']==NULL){
							?>
                                    <li ><a href="./informacion.php?tag=<?php echo base64_encode($row_sub['url_friendly']);?>"><small><?php echo strtr($row_sub["tab_nombre"],"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ"); ?></small></a></li>
                                  <?php  }else{?>
                                  <li ><a href="<?php echo $row_sub['url'];?>" target="<?php echo $row_sub['target']; ?>"><small><?php echo strtr($row_sub["tab_nombre"],"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ"); ?></small></a></li>
                                  
                                  <?php } } ?>
                                </ul>
                                <?php  }?>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                    </div>
                </nav>
   
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>