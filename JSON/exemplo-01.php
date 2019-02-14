<?php 

$pessoas = array ();

array_push($pessoas, array('Nome'=>'João', 'idade'=>20));
array_push($pessoas, array('Nome'=>'Ramon', 'idade'=>22));

echo json_encode($pessoas);
 ?>