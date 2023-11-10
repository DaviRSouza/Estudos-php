<?php
class Numeros
{

    public $par;
    public $impar;
    public $composto;
    public $primo;

    function __construct()
    {
        echo 'eu sou o metodo contrutor<br>';
    }

    function __destruct()
    {
        echo 'eu sou o metodo destrutor<br>';
        //session
    }
}

$num1 = new Numeros;
$num1->par = 28;
echo "<pre>";
var_dump($num1);
echo '</pre>';

$num2 = new Numeros;
$num2->par = 19;
echo "<pre>";
var_dump($num2);
echo '</pre>';

unset($num1);
echo '<hr>';
