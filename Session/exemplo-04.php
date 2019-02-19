<?php 

	session_id('dc6s1giqnrfsqu96fvo8gptbgn');
	require_once("config.php");

	session_regenerate_id();

	echo session_id();



	var_dump($_SESSION);
 ?>