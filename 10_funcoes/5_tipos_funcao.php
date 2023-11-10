<?php 
###################################################
#########passar ARGUMENTOS por referência##############
//Um argumento passado por referência faz com que a variável que está no argumento
//seja modificada fora da função
function aula($aluno,$prof='edu')
{
    echo "$aluno - $prof <br>";
}

aula('Davi');
aula('Nilso');
aula('Gean');
aula('Felipe', 'JS');
aula('Yasmin', '');

echo "<br>";
//echo $nome;
echo "<hr>";
##############################################
### VALOR PADRÃO ##################
//Não colocar padrão à esquerda, sempre à direita
//Posso ter quantos eu quiser

echo "<hr>";
#############################################################
/* Variáveis funçoes - sempre que o PHP encontra uma variável seguida de parenteses, procura uma funçao cujo nome é dado pelo valor da variável e executa essa funçao.
função anonima - closures
*/

$teste=function($nome):void
{
    echo "Eu sou $nome : uma função anonima atribuida a uma variavel";
};

$teste('jujuba');
echo "<br>";
echo getType($teste);

echo "<br>";
echo is_iterable($teste);//false

echo "<br>";
echo is_callable($teste);//1 - true

echo "<br>";
 #######################################################################################
echo "<hr>";


/////////////////////////////////////////////////////////////////////////////////////////
?>