<?php 
define("HR","<hr>");
#####################################
$palavra="EdUaRdO";
$frase="esta é uma frase em php, esta é uma frase em php, esta é uma frase em php";
$nome ="Eduardo Pretel Filho";
$branco="            Edu              ";

echo $palavra;
echo HR;

echo strtoupper($palavra);// para maiusculas
echo HR;

echo strtolower($palavra);//para minusculas
echo HR;

echo strrev($palavra);//para reverso
echo HR;

echo strlen($palavra);//para tamanho
echo HR;

echo ucfirst($frase);//para primeira letra da frase para maiúscula
echo HR;

echo ucwords($frase);//para primeira letra de cada palavra para maiúscula
echo HR;

echo ucfirst(strtolower(strrev($palavra)));//para reverso
echo HR;

echo substr($nome,0,7);
echo HR;
echo substr($nome,8,6);
echo HR;
echo substr($nome,15);
echo HR;

echo HR;
echo $branco;
echo HR;
echo ltrim($branco);
echo HR;
echo rtrim($branco);
echo HR;
echo trim($branco);
echo HR;

?>