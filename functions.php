<?php
function muestraArray($array){
	foreach ($array as $key => $value){
		echo $key.": ";
		if(is_array($value)){
			// foreach ($value as $value2)
			// echo $value2.", ";
			echo implode('<br>&nbsp;&nbsp;&nbsp;&nbsp;', $value);
		}
		else echo $value;
		echo "<br/>";
	}
	return TRUE;
}

?>