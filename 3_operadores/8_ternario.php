<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 

$a = 25;
$b = 38;

echo ($a > $b)?("Verdadeiro"):("Falso");
echo "<br>";
echo ($a < $b)?("Verdadeiro"):("Falso");

echo "<hr>";
echo (false)?("Verdadeiro"):("Falso");
echo "<br>";
echo (true)?("Verdadeiro"):("Falso");

echo "<hr>";
echo (!true)?("Verdadeiro"):("Falso");
echo "<br>";
echo (!false)?("Verdadeiro"):("Falso");

echo "<hr>";
echo !true ? "Verdadeiro" : "Falso" ;
echo "<br>";
echo (!false)   ?("Verdadeiro")
                :("Falso");
?>
</body>
</html>
