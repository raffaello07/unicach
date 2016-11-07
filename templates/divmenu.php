<?php include('../src/dbconex.php');
			$result_sub=mysql_query("SELECT * FROM cat_informacion WHERE url_friendly='".$grupo."' ORDER BY id_menu asc");
			while($row_sub = mysql_fetch_array($result_sub)) { 
				$perteneceMenu=$row_sub['id_menu'];
			} 
?>

                
                
        <nav class="navbar navbar-default navbar-fixed">
				
			<div class="container" ng-app="unicachApp">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#colapsemenu">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="colapsemenu">
					<ul class="nav navbar-nav navbar-left">
						<li class="navbar-element <?php if ($grupo==NULL){ echo 'active'; }  ?>"><a href="index.php" class="navbar-enlace">Inicio</a></li>
						<?php
			
						$result=mysql_query("SELECT * FROM cat_menu WHERE publicar='1' ORDER BY orden asc");
						while($row = mysql_fetch_array($result)) { 
							$result_sub=mysql_query("SELECT * FROM cat_informacion WHERE id_menu='".$row['id_menu']."' AND status='1' ORDER BY orden asc");
							if($row_sub = mysql_fetch_array($result_sub)){
								
						?>
						
						<li role="presentation" class="navbar-element <?php if ($perteneceMenu==$row['id_menu']){ echo 'active'; }  ?> dropdown">
						    <a class="dropdown-toggle navbar-enlace" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						      <?php echo htmlentities($row['titulo']); ?> <span class="caret"></span>
						    </a>
						    
						    <ul class="dropdown-menu">
							    <?php 
								    if ($row_sub['url']==NULL){
							?>
                                    <li ><a href="./informacion.php?tag=<?php echo base64_encode($row_sub['url_friendly']);?>"><small><?php echo strtr($row_sub["tab_nombre"],"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ"); ?></small></a></li>
                                  <?php  }else{?>
                                  <li ><a href="<?php echo $row_sub['url'];?>" target="<?php echo $row_sub['target']; ?>"><small><?php echo strtr($row_sub["tab_nombre"],"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ"); ?></small></a></li>
                                  
                                  <?php }
	                            while($row_sub = mysql_fetch_array($result_sub)) { 
									if ($row_sub['url']==NULL){
							?>
                                    <li ><a href="./informacion.php?tag=<?php echo base64_encode($row_sub['url_friendly']);?>"><small><?php echo strtr($row_sub["tab_nombre"],"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ"); ?></small></a></li>
                                  <?php  }else{?>
                                  <li ><a href="<?php echo $row_sub['url'];?>" target="<?php echo $row_sub['target']; ?>"><small><?php echo strtr($row_sub["tab_nombre"],"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ"); ?></small></a></li>
                                  
                                  <?php } } ?>
                            </ul>
						</li>
						<?php  
							
							}else{
							
						?>
						<li class="navbar-element <?php if ($perteneceMenu==$row['id_menu']){ echo 'active'; }  ?>"><a href="<?php if($row['url']==NULL){ echo "#"; }else{ echo $row['url'] ;}?>" target="<?php echo $row['target']; ?>" class="navbar-enlace"><?php echo htmlentities($row['titulo']); ?></a></li>
						
						<?php 
							} }
						?>
						
					</ul>
				</div>
				<form role="search" action="gcs.php" class="navbar-form navbar-right searchform" ng-controller="BusquedaController">
					<div class="form-group searchform-group">
						<div class="input-group">
							<input type="text" autocomplete="off" name="q" class="form-control searchInput" placeholder="Buscar..." ng-model="queryInput" ng-keypress="buscar(queryInput)";>
							<span class="input-group-btn">
							<button class="btn btn-default searchBtn" type="submit"><i class="fa fa-search"></i></button>
						</span>
						</div>
					</div>
					<span ng-hide="true" ng-if="ultimoQuery != queryInput">{{buscar(queryInput);}}</span>
	
					<div class="searchResults col-sm-8" ng-show="busqueda" ng-class="{'searchResults-show': busqueda}">
						<section>
							<header>
								<h2><span class="mdgov_resultsCount">{{results.queries.request[0].totalResults+' Resultados'}}</span></h2>
								<a href="" ng-click="cerrarBusqueda()" class="searchCloseLink"><i class="fa fa-times" aria-hidden="true"></i> <span class="sr-only">Close</span></a>
							</header>
							<div id="mdgov_webResults" data-svc="mdgov" data-type="search" data-category="web_pages" data-limit="9" class="mdgov_searchResultsBlock mdgov_dataContainer">
								<div class="text-center" ng-show="buscado">
									<i class="fa fa-spinner fa-spin fa-2x"></i>
								</div>
								<ul class="cl_base_vNav clearfix">
									<li class="searchItem" ng-repeat="item in results.items">
										<a href="{{item.link}}" class="mdgov_resultLink mymdItem" target="_blank" data-title="Governor &lt;b&gt;Larry&lt;/b&gt; Hogan" data-suggestion="false">
								<span class="mymdItemInner">
									<i class="fa fa-chevron-right pull-right mobile-arrow" aria-hidden="true"></i>
									<span class="cl_dataItemTitle" ng-bind-html="item.htmlTitle"></span>
									<br />
									<span class="searchUrl" ng-bind-html="item.htmlFormattedUrl"></span>
									<br />
									<span class="searchSpip" ng-bind-html="item.htmlSnippet"></span>
								</span>
										</a>
									</li>
								</ul>
							</div>
							<a href="gcs.php?q={{queryInput}}" target="_blank" class="mdgov_moreLink">Más resultados <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
						</section>
					</div>
				</form>
			</div>
		</nav>
		