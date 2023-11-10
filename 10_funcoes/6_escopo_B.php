<?php
//para que a função acesse a variavel $nome que esta no escopo global
//duas maneiras:
// 1 - palavra reservada global
// 2 - Array super global $GLOBALS
// neste arquivo a 2
// As variaveis pre definidas são chamadas de Arrays SUPER GLOBAIS
// porque podem ser acessadas em qualquer escopo sem precisar que a definamos como global

$nome= "Edu";//escopo global
$idade = 25;
echo "$nome - $idade<br>";

function escopo()
{

	$cep = "04404-050";
	$idade = 52;
	
	$nome = "Renata";
	echo $nome," - ",$idade,"<br>";
    echo $GLOBALS['nome'];//

}
echo "<hr>";
escopo();
echo "<hr>";
//echo "$nome - $idade <br>";

?>