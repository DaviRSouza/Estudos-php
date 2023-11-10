<?php 
/* 
Devo iniciar a sessão - session_start();
Só pode ser usada uma vez na página - senão retorna erro;
Enviar dados para a sessão:
		Atribuição de valores - $_SESSION[nome]=$_POST[nome];
Estará disponível a partir da mesma página em que foi criada
Só existe para esta "sessão do browser";
Se eu não destruir o arquivo ele ficará como "lixo" no servidor, porém inascessivel.
 */
session_start();
$_SESSION['nome']=$_POST['nome'];
$_SESSION['escola']=$_POST['escola'];
?>
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
###########################################################3
echo "<hr>";
#####################################33
echo "Esta é a Sessão: <br>";
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
echo "<hr>";
?>

</p>
<p>&nbsp;</p>
<p><a href="3_ver.php">ir para a página 3</a></p>
</body>
</html>
