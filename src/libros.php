<?php
	$librosResultado = $mysqliAgencia->query("SELECT codigo, titulo FROM `cat_libreria` ORDER BY rand() LIMIT 10");