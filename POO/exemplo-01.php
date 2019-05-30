<?php 

class Pessoa{

	public $nome;//Atrubuito

	public function falar(){ ///Metedos

		return "O meu nome é ".$this->nome;
	}

}

$ramon = new Pessoa();
$ramon->nome = "Ramon Marcelino Ribeiro";
echo $ramon->falar();

 ?>