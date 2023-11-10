<?php 
session_start();
unset($_SESSION['salario']);
//($_SESSION);
session_destroy();
?>
<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<?php

echo "<hr>";
#####################################33
echo "Esta é a Sessão: <br>";
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
echo "<hr>";
?>
<p><a href="6_final.php">ir para a página 6</a></p>
</body>
</html>
