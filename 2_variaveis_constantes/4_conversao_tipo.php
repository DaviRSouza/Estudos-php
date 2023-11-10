<!doctype html>

<html>
<head>
<title>Settype_Gettype</title>
<meta charset="utf-8">
</head>
<body>

<?php 
//Estudo de Settype
//Declara variável ou altera o tipo de dado
settype($nome, 'string');
var_dump($nome);
echo "<hr>";

$num = 50;
var_dump($num);
echo "<br>";
settype($num, 'string');
var_dump($num);//50
echo "<hr>";

///////////////////////////////////////////////////////////////////////////////////////////
$escola = "senac";
var_dump($escola);//
echo "<br>";
settype($escola,'int');
var_dump($escola);
echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////
$titulo = "55casas";
$titulo2 = (int)($titulo);
var_dump($titulo);//55casas
echo "<br>";
var_dump($titulo2);//0

echo "<HR>";

////////////////////////////////////////////////////////////////////////////////////////////////////////

$musica = "10sem musica";
$musica = (int)$musica;
var_dump($musica);//0
?>
</body>
</html>
