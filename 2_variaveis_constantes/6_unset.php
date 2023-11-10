<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 


$a = 12;
echo "Essa variável existe:";
echo isset($a);//1
echo "<hr>";
unset($a);//desconfigura
echo "Essa variável existe:";
echo isset($a);//1

?>
</body>
</html>
