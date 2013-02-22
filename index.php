<html>
	<head>
		<title>Pruebas HTML</title>
	</head>
	<body>
		<?php
			echo "<b>EJEMPLO 1: Tratamiento de datos</b>";
			echo "<p>";			
			$name='Diego';
			$edad=28;
			$direccion=array('Pol. Adormideras','A Coru&ntilde;a',28);
			$vacio=NULL;
			var_dump($name);
			var_dump($edad);
			var_dump($vacio);
			echo $name[2]; // devuelve esto: string(5) "Diego" int(28) NULL e
			echo "</p>";
			echo "<pre>";
			print_r($direccion); /* devuelve el contenido de $dirección en el array */
			echo "</pre>";
			echo "<hr/>";
			echo "<b>EJEMPLO 2: MUESTRA DE UN ARRAY DE UNA GLOBAL PREDETERMINADA</b>";
			echo "<pre>";
			print_r ($_SERVER); // mostramos el array de SERVER
			echo "</pre>";
			echo "<hr/>";
			echo "<b>EJEMPLO 3</b>";
			echo "<p>";
			echo @name;
			echo "</p>";
			echo "<hr/>";
			echo "<b>EJEMPLO 4: NUMEROS Y OPERADORES</b>";
			echo "<p>";
			echo 3-2*2*8/3*2-2*4-2 . "<br>";
			echo 5<<2;
			echo "</p>";
			echo "<hr/>";
			echo "<b>EJEMPLO 5: BUCLE SIN FIN</b>";
			echo "<p>";
			echo "<ul>";
				for ($i=1; $i<9; $i++){
					echo "<li>Bienvenido " . $i . "</li>";
				}
			echo "</ul>";
			echo "</p>";
			echo "<hr/>";
			echo "<b>EJERCICIO 1:</b> UNA TABLA QUE SIMULE LAS MULTIPLICACIONES DESDE 1X1 HASTA 4X4";
			echo "<p>";
				echo "<table border=1>";
				for ($colhoriz=0;$colhoriz<=4;$colhoriz++){
					echo "<tr>";
				/*	if ($colhoriz==0) {
						echo"<td align='center'>&nbsp;&nbsp;</td>";
					}
					else{
						echo"<td align='center'> " . $colhoriz ." </td>";
					}*/
					for ($colvert=0;$colvert<=4;$colvert++){
						if ($colvert==0 && $colhoriz==0) {
							echo "<td align='center'></td>";
						}
						elseif($colvert==0){
							echo "<td align='center'> " . $colhoriz . " </td>";
						}
						elseif($colhoriz==0){
							echo "<td align='center'> " . $colvert . " </td>";
							
						}
						else{
							echo"<td align='center'> " . $colvert*$colhoriz ." </td>";
						}					
					}
					echo "</tr>";
				}
				echo "</table>";		
			echo "</p>";
			echo "<hr/><b>EJERCICIO 2</b>: SERIE FIBONACCI<p>";
			echo "<br>";
			$fibA= 0; echo $fibA . ", ";
			$fibB= 1;
			while ($fibB < 22){
				echo $fibB . ", ";
				$fibB += $fibA;
				$fibA++;
			}
			echo "<br><font color='red'><b>CORRECCI&Oacute;N</b></font><br>";
			echo "F = 0, 1, ";
			$f0=0; $f1=1; $fmax=22; $f2=$f0+$f1;
			while ($f2<$fmax){
				echo $f2.", ";
				$f0=$f1;
				$f1=$f2;
				$f2=$f0+$f1;
			}			
			echo "</p>"
		?>
		<a href="MasEjer.php">CLIC AQU&Iacute; PARA VER MAS EJERCICIOS</a>
	</body>
</html>