<?php
/**
 Variaveis pre-definidas
 variaveis que a linguagem cria automaticamente
 Na sua maioria são arrays com o escopo GLOBAL
 Algumas recebem informações vindas na requisição do cliente
 algumas recebem informações vindas da requisão do cliente:
 $_GET, $_POST, $_COOKIE

 Outras recebem informações de sessão: $_COOKIE,$_SESSION
 outras informações do servidor $_SERVER

 finalmente a $GLOBALS que contera uma referencia de todas as variaveis disponiveis nesta aplicação
 */

$nome = "Edu";
echo $nome;//Edu
echo "<hr>";

$nomes = ['edu', 'eva', 'rita', 'ana'];
echo $nomes[1];//eva
echo $GLOBALS ['nomes'][1];//eva
echo "<hr>";

//passar pela URL a informação ?rua=Tito
//echo $_GET['rua'];//tito
echo "<br>";
//echo $GLOBALS['$_GET']['rua'];//tito

echo '<pre>';
    var_dump($GLOBALS);
echo '</pre>';
echo "<hr>";

?>