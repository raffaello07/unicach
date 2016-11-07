<nav id="nav" class="clearfix navbar" >
	<div class="container">
       
	<ul id="nav-main" >
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
   
  