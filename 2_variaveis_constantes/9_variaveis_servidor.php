<!doctype html>
<html>
<head>
<title>Estudo de vari&aacute;vel</title>
<meta charset="utf-8">
</head>
<body>
<?php 
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER["REMOTE_ADDR"];
echo"<pre>";
var_dump($_SERVER);
echo"</pre>";

?>
</body>
</html>