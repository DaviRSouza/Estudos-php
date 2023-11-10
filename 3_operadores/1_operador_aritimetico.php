<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 
$a = 75;
$b = 90;
$c = "20";
$d = "60";

//soma
$total = $a+$b;
echo "A soma de \$a com \$b é: $total";
echo "<hr>";
$total = $c+$d; // conversão implicita - - - converte automaticamente para n
echo "A soma de \$c com \$d é: $total";
echo "<hr>";

//soma
$total = $a-$b;
echo "A subtração de \$a com \$b é: $total";
echo "<hr>";
$total = $c-$d;
echo "A subtração de \$c com \$d é: $total";
echo "<hr>";

//Multiplicalçao
$total = $a*$b;
echo "A multiplicação de \$a com \$b é: $total";
echo "<hr>";
$total = $c*$d;
echo "A multiplicação de \$c com \$d é: $total";
echo "<hr>";

//Divisão
$total = $a/$b;
echo "A divisão de \$a com \$b é: $total";
echo "<hr>";
$total = $c/$d;
echo "A divisão de \$c com \$d é: $total";
echo "<hr>";

//Resto da Divisão
$total = $a%3;
echo "O resto da divisão de \$a com 3 é: $total";
echo "<hr>";
$total = $c%3;
echo "O resto da divisão de \$c com 3 é: $total";
echo "<hr>";

//Potenciação - pow()$a,3)
$total = $a**2;
echo "\$a elevado a 2 é: $total";
echo "<hr>";
$total = $c**3;
echo "\$c elevado a 3 é: $total";
echo "<hr>";

//raiz quadrada
echo sqrt(64);
echo "<br>";
echo 64 ** (1/2);
echo "<br>";
echo pow(64,1/2);
echo "<br>";
//outras raizes 
echo 27 **(1/3);// raiz cubica de 3
 ?>

</body>
</html>
