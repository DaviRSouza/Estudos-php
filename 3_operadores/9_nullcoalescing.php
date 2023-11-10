<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 
$a = 2 ;
//$c = "Senac" ; 

$b = (isset($c))? $c: "não existe variavel C";
echo $b;

echo "<hr>";
$d = $c ?? "não existe variavel C";
echo $d;
?>
</body>
</html>
