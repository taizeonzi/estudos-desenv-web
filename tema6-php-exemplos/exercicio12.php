<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Funções</title>
</head>
<body>
<!-- Exemplo de sintaxe de criação de uma função em PHP e a forma de invocá-la.
A sintaxe de uma função contém os seguintes elementos: Palavra reservada “function” seguida do nome da função. Nome da função seguido de parênteses – “()”. Caso receba parâmetros, eles deverão ser declarados dentro dos parênteses. Do contrário, deverão ficar sem conteúdo. Instruções da função envoltas em chaves – “{}”. -->
<?php
    $num1 = 10;
    $num2 = 15;

    $num3 = soma($num1,$num2);
    imprimir_resultado($num3);

    function soma($numero1, $numero2)
    {
        return $numero1 + $numero2;
    }
    function imprimir_resultado($numero)
    {
	    echo "O resultado da operação é igual a: " . $numero;
    } ?>
</body>
</html>