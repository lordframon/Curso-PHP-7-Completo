
<form>
	<imput type="text" name="nome">
	<imput type="date" name="nascimento">
	<imput type="submit" name="OK">
</form>

<?php
if (isset($_GET)) {
	foreach ($_GET as $key => $value) {
	
		echo "Nome do campo: ".$key;

		echo "Valor do campo: ".$value;

		echo "<hr>";
	}
}
?>