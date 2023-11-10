<!doctype html>
<html>
<head>
<title>Tipos de Dados</title>
<meta charset="utf-8">
</head>
<body>

<?php
/*
No PHP o tipo não é relacionado à variavel,, e sim ao dado que esta armazenado nela
Ou seja, a variavel não é tipada.

Posso mudar otipo de dado durante a execução do programa

 - Simples  - Escalares
 	- Integer 
 	- Float 
 	- Strings 
 	- Boolean = True ou False

 - Compostos 
 	- Array 
 	- Object
	- Callable - Uma variavel que pode ser chamada como função
	- Iterable - return um array ou objeto
 - Especiais
 	- Resource - faz referencia a algo externo ao PHP
 	- Null - 
 - Pseudo tipo - faz parte da declaração de função
	 - mixed
	 - void
*/

$a = 53;
$b = -254;
$c = 12.36;
$d = "Senac";
$e = TRUE;
$f = false;

echo $a . "<br>";//53
echo gettype($a) . "<br>";//integer
echo gettype($b) . "<br>";//integer
echo gettype($c) . "<br>";//double
echo gettype($d) . "<br>";//string
echo gettype($e) . "<br>";//boolean
echo gettype($f) . "<br>";//boolean

echo $e . "<br>";//1 - para true
echo $f . "<br>";//null - para false

////////////////////////////////////////////////

echo is_double($c);//true - 1
echo is_integer($a);//true - 1
?>

</body>
</html>
