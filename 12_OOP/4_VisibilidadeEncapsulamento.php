<?php
class Numeros
{

    /**
     protected e private não podem ser acessadas publicamente
     ou seja, diretamente pelo objeto
     so poderão ser acessadas por elementos da propia classe
     */
    protected $par;
    private $impar;

    /**
     as propriedades declaradas como public podem ser acessadas diretamente pelo 
     objeto e tambem por elementos(metodos) da classe
     */
    public $composto;
    public $primo;

    /**
     visibilidade tambem e aplicada aos metodos
     se eu não declarar a visibilidade, o metodo sera publico e 
     acessivel pelo objeto

     se declarado como private ou protected sera acessivel somente por 
     outros metodos da classes

     p __construct e __destruct são obrigatoriamente publicos
    */
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
