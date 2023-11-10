<?php 
require_once 'function.php';
require 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

/*
A diferença entre o o include e o requiree e o erro que retorna
O require retorna o erro do tipo fatal error e interrompe o processamento da pagina
A mensagem de erro pode ser inibida com o comando (@)
*/

<?php
require "lista.php"
?>
<hr>
<?php
require "listassss.php"
?>
<hr>
<?php
require "lista.php"
?>
</body>
</html>