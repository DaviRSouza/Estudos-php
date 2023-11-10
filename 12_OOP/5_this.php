<?php
class Numeros
{
    protected $par;
    private $impar;


    public $composto;
    public $primo;
    function setPar($i)
    {
        //regra de negocio para a propiedade $par
        if($i % 2 == 0){
            //$this aponta para o objeto que chamou o metodo
            $this->par = $i;
        }
    }

    function getPar()
    {
        return $this->par;
    }
}

$num1 = new Numeros;
$num1->setPar(2810);
echo $num1->getPar();
echo "<pre>";
var_dump($num1);
echo '</pre>';

$num2 = new Numeros;
$num2->setPar(158);
echo $num2->getPar();
echo "<pre>";
var_dump($num2);
echo '</pre>';

unset($num1);
echo '<hr>';
