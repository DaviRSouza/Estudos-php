<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 
$a = "a casa ";
$b = "é bonita!!!!";
echo $a . $b;
//em função da conversão implicita o operador literal
//ou de concatenação não e o sinal de adição
//no PHP é ponto

echo "<hr>";
$c = "eu tenho ";
$d = 2;
$e = " gatos";

//conveção implicita
echo $c.$d.$e;
echo "<br>";

//conveção explicita
echo $c.(string)$d.$e;
echo "<br>";

//conveção explicita
settype($d, 'string');
echo $c.$d.$e;
echo "<br>";

 ?>

</body>
</html>
