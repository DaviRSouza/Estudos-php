<?php

//a class descrever o objetc(uma variavel)
//o objeto e uma instancia da classe
// versão 4 do php

class Numeros
{
    //propriedades do objeto
    var $par;
    var $impar;
    var $composto;
    var $primo;

    //metodos da classe
    function Teste()
    {
        echo 'eu sou a função teste<br>';
    }

    //roda automaticamente quando a classe e instanciada 
    function Numeros()
    {
        echo 'eu sou o metodo contrutor<br>';
    }
}

//o construtor de objetos e a palavra reservada new

$num1 = new Numeros;

//o operador de objeto e o ponto por definição
//$num.par; //Dot syntax -> sintaxe de pontos
//no php o ponto é o operador literal, ou de concatenação
//utilizamos então a seta
$num1->par = 28;
//teste() - error
$num1->Teste();
echo "<pre>";
var_dump($num1);
echo '</pre>';

$num2 = new Numeros;
$num2->par = 19;
$num2->Teste();
echo "<pre>";
var_dump($num2);
echo '</pre>';