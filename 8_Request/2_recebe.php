<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<p>
  <?php 
 
echo "Esta é a Post:  <br>";
echo "<pre>";
  var_dump($_POST);
echo "</pre>";

##########################################################
echo "<hr>";
#####################################
echo "Esta é a GET:  <br>";
echo "<pre>";
  var_dump($_GET);
echo "</pre>";

##########################################################
echo "<hr>";
#####################################
echo "Esta é a Cookie: <br>";
echo "<pre>";
  var_dump($_COOKIE);
echo "</pre>";

##########################################################
echo "<hr>";
#####################################
echo "Esta é a Request: <br>";
echo "<pre>";
  var_dump($_REQUEST);
echo "</pre>";

##########################################################
echo "<hr>";
#####################################
?>

</p>
<p>&nbsp;</p>

</body>
</html>
