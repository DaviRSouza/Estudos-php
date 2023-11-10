<!doctype html>
<html>
<head>
<title>Estudo de variável</title>
<meta charset="utf-8">
</head>
<body>
<?php
$animal = "Cao";

$$animal = "Caramelo";//cão = "caramelo"

echo"<pre>";
var_dump($animal);
var_dump($Cao);
echo"</pre>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
$variaveis = get_defined_vars();
echo"<pre>";
var_dump($variaveis);
echo"</pre>";

?>
</body>
</html>