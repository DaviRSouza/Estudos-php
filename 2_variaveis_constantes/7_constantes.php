<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 
/*
LOCAIS NA MEMÓRIA EM QUE PODEMOS ARMAZENAR INFORMAÇÕES
SÃO IGUAIS A VARIÁVEIS, MAS NÃO PODEM TER O SEU CONTEUDO
ALTERADO DURANTE A EXECUÇÃO DO CÓDIGO
POR PADRÃO USAR LETRAS MAIUSCULAS
NÃO SÃO PRECEDIDAS POR $
*/
define('CURSO', 'Php');
echo CURSO;//php
define("R", "<hr>");
echo R;

echo "O curso e de CURSO";//não existe interpolação de constante
Echo R;
echo "O curso é de " . CURSO;//concatenar
Echo R;
////////////////////////////////////////////////////////////////////////////////////////////
//podemos guardar array em constantes
define('CURSOS', ['PHP', 'MySQL', 'HTML', 'CSS', 'JS']);
echo "O curso é de " . CURSOS[1];//MySql

?>
</body>
</html>