<?php
/*
para nomear uma função usar as mesmas regras de variaveis
* começa com letra ou underline "_"
* não pode começar com numeros, porem pode conter numeros
* Deve ter um nome que descreva o que ela faz
* usava underline => agora camelcase - is_array() => isArrays()
* padrões: php-fig
* Funções ou metodos(classes) Tem uma responsibilidade unica
* Variaveis declaradas dentro da função somente são acessadas por ela
  isso é chamado de escopo local
  escopo - onde a variavel pode ser acessada
*/
function maneh()
{
	echo "eu sou a primeira função";
}

function potencia()
{
	$base=5;
	$expoente=8;
	$total=$base**$expoente;
	echo $total;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	maneh();
?>

<hr>
<?php
	maneh();
?>

<hr>
<?php
	maneh();
?>

<hr>
<?php
	potencia();
?>

<hr>
<?php
	echo $base;// ERRO escopo global - não existe %num1
?>

</body>
</html>