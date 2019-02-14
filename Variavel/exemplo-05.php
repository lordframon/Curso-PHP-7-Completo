<?php
	
	$nome = "Ramon";


	function teste(){

		global $nome;
		echo $nome;
	}
	function teste2(){
		echo $nome."Agora no teste dois";
	}

	teste();

	teste2();

?>