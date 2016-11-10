<?php
	$boletinesResultado = $mysqli->query("SELECT id_boletin, publicar, cabeza, sumario, fecha FROM `boletines` ORDER BY `fecha` DESC LIMIT 10");
	