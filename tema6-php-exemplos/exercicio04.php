<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Foreach</title>
</head>

<body>
	<?php
	$carros = Array("Fusca", "Monza", "Passat");

	foreach($carros as $carro){
		echo $carro;
		echo "\n";
	}

	for ($i = 0; $i < count($carros); $i++) {
		echo $carros[$i];
		echo "\n";
	} ?>
</body>

</html>