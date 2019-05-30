<?php 

	function ola($texto, $periodo = "Bom dia"){

		return "ola $texto! $periodo<br>";
	}
	echo ola("","");
	echo ola("Ramon","");
	echo ola("","Boa noite");
	echo ola("Ramon","Boa tarde");

 ?>