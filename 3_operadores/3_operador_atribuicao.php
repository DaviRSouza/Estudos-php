<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 
//o operador de atribuição é o igual =
//variavel nome recebe "eduardo"
//"eduardo " é atribuido a variavel $nome
$nome = "eduardo ";
$nome = $nome . "pretel ";
echo $nome. "<br>";

$nome .= "Filho";//$nome = $nome . "filho ";
echo $nome. "<br>";

echo "<br>";
//////////////////////////////////////////////////
//A variavel $nome recebe o valor 25
//O valor 25 e atribuido a variavel $num
$num = 25;
echo $num. "<br>";
$num = $num + 5;//num = 25+5
echo $num. "<br>";//30
$num += 10;//$num + 10 -> $num = 30+10
echo $num."<br>";//40

/*
=
+=
-=
*=
/=
%=
.=
*/
 ?>
</body>
</html>