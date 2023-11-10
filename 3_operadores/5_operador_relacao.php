<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 
//Operador de relação ou operador relacionavel
$a = 20;
$b = "20";


//igualdade - verifica somente o valor e não e não verifica o tipo de dado
echo "A \$a é igual a \$b: ";
echo $a == $b;
echo "<hr>";

//identica - verifica o valor e o tipo de dado
echo "A \$a é identica a \$b: ";
echo $a === $b;
echo "<hr>";

//diferente - verifica somente se o valor e diferente e não verifica o tipo de dado
echo "A \$a é diferente de \$b: ";
echo $a != $b;
echo $a <> $b;
echo "<hr>";

//não identica  - verifica o valor e o tipo de dado
echo "A \$a é não identica a \$b: ";
echo $a !== $b;
echo "<hr>";

//maior que - verifica se o valor e maior que o outro
echo "A \$a é maior que \$b: ";
echo $a > $b;
echo "<hr>";


//maior ou igual - verifica se o valor e maior ou igual ao outro
echo "A \$a é maior que \$b: ";
echo $a >= $b;
echo "<hr>";

//menor que - verifica se o valor e menor que o outro
echo "A \$a é maior que \$b: ";
echo $a < $b;
echo "<hr>";


//menor ou igual - verifica se o valor e menor ou igual ao outro
echo "A \$a é maior que \$b: ";
echo $a <= $b;
echo "<hr>";

//maior que - verifica se o valor e maior que o outro
echo "A \$a é maior que \$b: ";
echo $a > $b;
echo "<hr>";


//spaceship - verifica tudo
$c = 20;
$d = 20;
echo $a <=> $b;
// 0 - se os valores forem iguais
// 1 - se o primeiro valor for > que o segundo valor
// -1 se o primeiro valor for < que o segundo valor
/*
http://php.net/manual/pt_BR/language.operators.comparison.php
*/
 ?>
</body>
</html>
