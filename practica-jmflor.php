<?php
/**
*Este archivo contiene dos funciones que devuelven un saludo personalizado y una suma.
*@author floresdelolmo
*@version v1.0
*@package Proyecto tarea5
*/

/**
*Función que devuelve una cadean con un saludo al nombre que se le pasa por parametro.
*@param string $nombre El nombre de la persona a saludar.
*@return string $resultado El saludo completo en forma de cadena.
*/

function holaNombre($nombre) {
	$resultado = "¡¡ Hola $nombre !!";
	return $resultado;
}

/**
*Función que devuelve la suma de dos numeros enteros que se le pasa por parametro.
*@param string $sum1 Un numero primero para hacer la suma.
*@param string $sum2 Un numero segundo para hacer la suma.
*@return string $resultado Devuelve la suma de los dos string $sum.
*/

function sumar($num1, $num2){
      $resultado = $num1 + $num2;
      return $resultado;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Script para Tarea 5 de DAW</title>
	</head>
	<body>
		<?php
		//Llamada a las funciones y impresión en el html.
		echo holaNombre('Jose Manuel Flores');
		echo "El resultado de la suma es ".suma(20, 7);
		?>
	</body>
</html>
