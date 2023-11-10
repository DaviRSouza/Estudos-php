<!doctype html>

<html>
<head>
<title>Operadores de Incremento e Decremento </title>
<meta charset="utf-8">
</head>
<body>
<?php 
$a = 5;
echo $a;//5
$a++;//$a = $a + 1
echo $a;//6
$a++;//$a = $a + 1
echo $a;//7

//pre incremento - primeiro increment
echo ++$a;//atribuir 8 a variavel e depois printara

//pos incremento
echo $a++;//printara 8 e depois atribuira 9 a variavel
echo $a;//9

$a--;
echo $a;//8

--$a;
echo $a;//7

echo --$a;//atribuir 6 a variavel e depois printara

echo $a--;//printara 6 e depois atribuira 5 a variavel
echo $a;//5
 ?>

</body>
</html>
