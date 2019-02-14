<?php
	
	$frase = "A morte é a morte de vc na merda";

	$palavra = "vc";

	$q = strpos($frase, $palavra);

	$texto = substr($frase, 0, $q);

	var_dump($texto);
	echo "<br/>";

	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

	var_dump($texto2);
?>