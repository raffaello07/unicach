<?php
	$fechaActual=date('Y-m-d');

	$cartelesResultado = $mysqliAgencia->query("SELECT status, imagen, fecha_termino, link, categoria, target FROM `carteles` WHERE status='A' AND fecha_termino>'".$fechaActual."' ORDER BY id DESC LIMIT 10");
	