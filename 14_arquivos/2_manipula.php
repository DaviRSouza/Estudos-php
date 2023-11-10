<?php
header('content-type: text/html; charset=utf-8');
$hoje = "Hoje é ".date("d/m/Y H:i:s")."<br> \n";

$arq = 'log2.txt';//string - url do arquivo
$d = fopen($arq, 'r+');// a => ponteiro no final do arquivo
fwrite($d, $hoje);

var_dump($d);//resource

echo "<hr>";
include_once "$arq";