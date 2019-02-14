<?php

//Boa pratica de programação	
$anoNascimento = 1996;

$nome = "Ramon";
$sobrenome = "Marcelino Ribeiro";
$nomeCompleto = $nome." ".$sobrenome;

echo $nomeCompleto;;
echo "<br/>";
//Limpa a variavel
unset($nomeCompleto);

if (isset($nomeCompleto)) {
	echo $nomeCompleto;
}

?>