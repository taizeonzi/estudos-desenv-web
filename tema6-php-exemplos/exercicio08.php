<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Arrays mistos</title>
</head>
<body>
      <!--  Exemplos de array com índices numéricos e associativos. A sintaxe é parecida com a vista na declaração dos associativos, ou seja, cada par “índice/valor” é separado por ‘ => ’. -->
<?php
$carros = array (
	'vw'        => "Fusca",
	0           => "Passat",
	'chevrolet' => "Monza",
	1           => "Chevette",
	'fiat'      => "Tempra",
	2           => "Uno"
 );
 print_r($carros);
 //A impressão desse array gera a seguinte saída
 /*
 Array
 (
	[vw] => Fusca
	[0] => Passat
	[chevrolet] => Monza
	[1] => Chevette
	[fiat] => Tempra
	[2] => Uno
 )
 */

?>
</body>
</html>