<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<?php 
echo "Esta é a Post:  <br>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
###########################################################3
echo "<hr>";
#####################################33
echo "Esta é a Sessão: <br>";
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

echo "<hr>";
?>
<p><a href="4_logout.php">ir para a página 4</a></p>
</body>
</html>
