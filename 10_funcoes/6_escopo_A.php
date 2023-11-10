<?php
//para que a função acesse a variavel $nome que esta no escopo global
//duas maneiras:
// 1 - palavra reservada global
// 2 - Array super global $GLOBALS
// neste arquivo a 1

$nome= "Edu";//escopo global
$idade = 25;
echo "$nome - $idade<br>";

function escopo()
{
	global $nome;

	$cep = "04404-050";
	$idade = 52;
	
	$nome = "Renata";
	echo $nome," - ",$idade,"<br>";

}
escopo();
echo "$nome - $idade <br>";

?>