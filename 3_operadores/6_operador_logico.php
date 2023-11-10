<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 
/**
 TABELA VERDADE
 P1 P2      AND OR XOR
 V  V       V   V   F
 V  F       F   V   V
 F  V       F   V   V
 F  F       F   F   F

 */
$a = 2;
$b = 3;
$c = 6;
$d = 1;

//and - && - todos tem que retornar verdadeiro
//para que a expressao toda retorne verdadeiro
echo ($a < $b and $c > $d). "<hr>";
echo ($a < $b &&  $c > $d). "<hr>";//padrão

//or - || - basta um retornar verdadeiro 
//para que a expressão toda retorne verdadeira 
echo ($a > $b or $c > $d). "<hr>";
echo ($a > $b || $c > $d). "<hr>";//padrão

//xor - ^ - somente um pode retornar verdadeiro 
//para que a expressão toda retorne verdadeiro
echo ($a > $b xor $c > $d). "<hr>";//padrão
echo ($a > $b  ^  $c > $d). "<hr>";


?>
</body>
</html>
