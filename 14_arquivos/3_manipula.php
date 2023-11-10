<?php
header('content-type: text/html; charset=utf-8');
$hoje = "Hoje é ".date("d/m/Y H:i:s")."<br> \n";

$arq = 'log3.txt';//string - url do arquivo
$d = fopen($arq, 'r+');// a => ponteiro no final do arquivo
//trunca o arquivo - apaga seu conteudo para começar a escrever
fwrite($d, $hoje); 

var_dump($d);//resource

echo "<hr>";
include_once "$arq";