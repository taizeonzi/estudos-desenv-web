<!DOCTYPE html>
<html>
<body>
    <!-- Código PHP que exibe na tela somente os números pares dentro do intervalo de 1 a 10. O laço for é usado para iterar de 1 a 10. A variável $i começa em 1 e é incrementada em 1 a cada iteração até chegar a 10. A estrutura if verifica se o valor de $i é par, usando o operador de módulo (%). Se $i % 2 é igual a 0, então $i é par. Se a condição for verdadeira (ou seja, se $i for par), o valor de $i é impresso seguido de um espaço (" "). -->
<?php
for ($i = 1; $i <= 10; $i++) {
  if ($i % 2 == 0) {
    echo $i . " ";
  }
}
?>
</body>
</html>