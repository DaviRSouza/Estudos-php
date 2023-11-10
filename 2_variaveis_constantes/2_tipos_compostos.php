<!doctype html>
<html>
<head>
<title>Tpos de Dados</title>
<meta charset="utf-8">
</head>
<body>
<?php
$cores = ['Azul','Rosa','Marrom','Preto','Branco'];
/*
    printar um array retorna um erro do tipo warning
    o operador "@" inibe a mensagem de erro
    não e possivel utilizar o "@" com echo
*/

@print $cores;
echo "<br>";
/*
    Para analisar um array, ou melhor, uma variavel qualquer
    existem 2 funções
*/
echo "<pre>";
print_r($cores);
echo "</pre>";

echo "<pre>";
var_dump($cores);
echo "</pre>";

echo $cores[3];//preto
echo "<br>";
$cores[3] = "Preta";
echo $cores[3];//preta

$cores[5] = "2001";
echo "<pre>";
var_dump($cores);
echo "</pre>";

echo is_array ($cores);//1

echo "<hr>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
#object
class Aluno
{
    public $nome;
    public $idade;
    public $fone;
}
//A classe descreve o objeto(variavel do tipo objeto)
//Objeto é uma instacia da classe
$aluno1 = new Aluno;
$aluno1->nome = "Edu";
$aluno1->idade=62;
$aluno1->fone=false;


$aluno2 = new Aluno;
$aluno2->nome = "Mane das couve";
$aluno2->idade=21;
$aluno2->fone=true;

echo "<hr>";

echo $aluno1->nome . "<br>";

echo "<pre>";
var_dump($aluno1);
var_dump($aluno2);
echo "</pre>";

echo gettype($aluno1);//object
echo "<br>";
echo get_debug_type($aluno1);//aluno
echo "<br>";
echo is_object($aluno1);//1

?>
</body>
</html>
