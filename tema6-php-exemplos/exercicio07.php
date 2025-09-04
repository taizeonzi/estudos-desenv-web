<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Arrays numéricos</title>
</head>
<body>
      <!-- Arrays numéricos. (A última forma é bastante útil em situações nas quais não sabemos o tamanho do array ou a quantidade de itens que ele receberá.) -->
<?php
//Declarando um array vazio
$carros = array();

//Primeira forma de declaração e atribuição de valores
$carros = Array("Fusca", "Monza", "Passat");

//Segunda forma de declaração e atribuição de valores
//Esta forma é semelhante à anterior, mas utilizando sintaxe similar a do Javascript
$carros = ["Fusca", "Monza", "Passat"];

//Terceira forma de declaração e atribuição de valores
$carros[0] = "Fusca";
$carros[1] = "Monza";
$carros[2] = "Passat";

//Quarta forma de declaração e atribuição de valores
$carros[] = "Fusca";
$carros[] = "Monza";
$carros[] = "Passat";
?>
</body>
</html>