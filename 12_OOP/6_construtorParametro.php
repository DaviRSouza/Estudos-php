<?php
class Numeros
{
    function __construct($valor)
    {
        echo "oii - $valor";

    }
}

$num1 = new Numeros('sumam');
echo '<hr>';
$num2 = new Numeros('até 2a');