<?php 

echo "<select>";
for ($i=date("Y"); $i > date("Y") - 100 ; $i--) { 
	echo'<option valuee ="'.$i.'">'.$i.'</option>';
}

echo "</select>";
 ?>