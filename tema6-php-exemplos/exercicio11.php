<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Arrays multidimensionais</title>
</head>
<body>
<!-- Exemplo de aplicação em PHP que possa utilizar um array multidimensional para mostrar os nomes e as notas dos alunos, além de mostrá-las ao usuário. -->
<?php
$alunos = array (
    array("João", 8.7,9.4),
    array("Maria", 9.2,8.9),
    array("Luis", 7.8,8.4),
    array("Fernanda", 8.7,9.1)
);

echo $alunos[0][0].": P1:".$alunos[0][1].", P2: ".$alunos[0][2]."<br>";
echo $alunos[1][0].": P1: ".$alunos[1][1].", P2: ".$alunos[1][2]."<br>";
echo $alunos[2][0].": P1: ".$alunos[2][1].", P2: ".$alunos[2][2]."<br>";
echo $alunos[3][0].": P1: ".$alunos[3][1].", P2: ".$alunos[3][2]."<br>";
?>
</body>
</html>