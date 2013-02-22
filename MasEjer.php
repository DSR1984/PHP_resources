<html>
<head>
	<title>MÁS EJERCICIOS PHP</title>
</head>
<body>
<?php
	echo "<h2><font color=blue>EJEMPLO 1: ARRAYS</font></h2>";
	echo "<p>";
	$alumno = array(
		'nombre' => 'Diego',	
		'apellidos' => 'S.R.',
		'edad' => 28,
		'escribe_algo' => FALSE,
		'estudiante' => TRUE,
		FALSE => 'cosa',
		'algo mas',
		3.7 => 'y este', // SÓLO RECOGE EL NÚMERO ENTERO.
		9 => 'mas todavia',
		123, // Al ser la última clave numérica un 9, se añade AUTOMÁTICAMENTE el nº de clave 10
		array ('rojo', 'verde','naranja')
	);
	echo "<pre>";print_r($alumno);echo "</pre>";
	echo "<br/>";
	foreach ($alumno as $key => $value){
		echo $key.": ".$value;
		echo "<br/>";
	}
	echo "</p><hr/>";
	echo "<h2><font color=blue>EJEMPLO 2: FUNCIONES TRABAJANDO ARRAYS</font></h2>";
 /**
  * Recibe un array de máximo dos dimensiones, mostrándolo por la pantalla.
  * 
  * @param array: Array de entrada
  * @return true
  * 
  */
	
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
	
	muestraArray($alumno);
	//include 'functions.php';
	$otro = array ('algo mas', array('gato','leon','tigre','FALCAO'));
	echo "<hr/>";
	//include 'functions.php';
	muestraArray($otro);
	echo "<hr/>";
	echo "<h2><font color=blue>EJERCICIO 3: CON DATE(), ESCRIBIR:</font></h2><br/><font color=green>Hoy, Semana 7 del 2013, 21 dias del mes 2, Febrero</font><p>Hoy, ";
	echo date('\S\e\m\a\n\a W \d\e\l Y \, \a j \d\i\a\s \d\e\l \m\e\s m \, F');
	echo "</p>";
        echo "<h2>tablas de matrices</h2>";
    $filas = 5;
    $columnas = 6;
    $asteriscos = (int)($filas*$columnas/4);
    $matriz = crearTablaBuscaminas($filas,$columnas,$asteriscos);
    dibujarTablaBuscaminas($matriz,$asteriscos);
 
/* funciones */
 
function dibujarTablaBuscaminas($matriz,$numAsteriscos)
{
    $filas = sizeof($matriz);
    $columnas = sizeof($matriz[0]);
    $numfilas = $filas-2;
    $numcolumnas = $columnas-2;
    echo "<h3>Tabla Buscaminas $numfilas filas * $numcolumnas columnas con max $numAsteriscos asteriscos</h3>";
 
    echo "<table border='1' cellpadding='10'>";
 
    for($i=1; $i < $filas-1; $i++)
    {
        echo "<tr>";
        for($j=1; $j < $columnas-1; $j++)
        {
                    echo "<td>".$matriz[$i][$j]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
 
function crearTablaBuscaminas($filas,$columnas,$numAsteriscos)
{
    $matriz = array();
 
    // crear matriz  en blanco 2 filas mas alta y 2 columnas mas ancha
    for($i=0; $i < $filas+2; $i++)
    {
        for($j=0; $j < $columnas+2; $j++)
        {
            $matriz[$i][$j] = "x";
        }
    }
    //relleno los asteriscos
    for($n=0; $n < $numAsteriscos; $n++)
    {
            $matriz[rand(1,$filas)][rand(1,$columnas)] = "*";
    }
    $matriznueva = $matriz;
    //Voy mirando cada una de las x que no son asteriscos
    for($i=1; $i <= $filas; $i++)
    {
        for($j=1; $j <= $columnas; $j++)
        {
            if ($matriz[$i][$j] == "x")
            {
                //cuento los * de alrededor para cada uno de ellos
                $n = 0;
                for ($a = -1; $a <= 1; $a++)
                {
                    for ($b = -1; $b <= 1; $b++)
                    {
                        $ia = $i + $a;
                        $jb = $j + $b;
                        $contenido = $matriz[$ia][$jb];
                        if ($matriz[$ia][$jb] == "*")
                            $n++;
                    }
 
                }
                $matriznueva[$i][$j] = $n;
            }
        }
    }
    return $matriznueva;
}
?>
</body>
</html>