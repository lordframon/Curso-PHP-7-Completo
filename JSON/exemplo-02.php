<?php 
$json = '[{"Nome":"Jo\u00e3o","idade":20},{"Nome":"Ramon","idade":22}]';

$data = json_decode($json, true);

var_dump($data);
 ?>