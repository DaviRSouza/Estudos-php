<?php 
include_once 'function.php';
include 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

/*
A diferença entre o o include e o requiree e o erro que retorna
include retorna erro um erro do tipo WARNING e continua o processamento da pagina
A mensagem de erro pode ser inibida com o operador de erro @
*/

<?php 
@include 'listassss.php'
?>
<hr>
<?php 
include 'lista.php'
?>
<hr>
<?php 
include 'lista.php'
?>
</body>
</html>