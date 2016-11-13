<?php
	$librosResultado = $mysqliAgencia->query("SELECT codigo, titulo, publicar FROM `cat_libreria` WHERE publicar='1' ORDER BY rand() LIMIT 10");