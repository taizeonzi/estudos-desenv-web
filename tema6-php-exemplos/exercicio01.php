<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>While</title>
</head>

<body>
<?php

$i = 2;
while ($i <= 20) {
	echo $i;
	$i+=2;
	echo "\n";
}

/*Sintaxe alternativa*/
$i = 2;
while ($i <= 20):
	echo $i;
	$i+=2;
	echo "\n";
endwhile; ?>
</body>

</html>