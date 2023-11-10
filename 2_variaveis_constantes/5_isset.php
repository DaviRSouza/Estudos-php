<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 
//Estudo de isset - testa (verifica) a existência da variavel
$a = 12;

echo "A \$a existe: ";
echo isset($a);//1
echo "<hr>";

echo "A \$b existe: ";
echo isset($b);//null
echo "<hr>";

/////////////////////////////////////////////////////////////////////////////////////////
//negação

echo "A \$a não existe: ";
echo !isset($a);//null
echo "<hr>";

echo "A \$b não existe: ";
echo !isset($b);//1
echo "<hr>";


?>
</body>
</html>
