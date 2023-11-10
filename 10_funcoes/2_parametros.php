<?php
declare(strict_types = 1);//aceita apenas o int ou oq vc mandar que seja
//5.0 - Obj
//5.1 - array
//5.4 = callable 
//7 - bool, float, int , string
//padrao => modo coercivo
function potencia(int $base,int $expoente)
{
	//$num1=5;
	//$num2=8;
	$total=$base**$expoente;
	echo $total;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	// senão for  definido para qual parametro são estes valores, eles serão atribuidos na ordem que foram declarados
	potencia(25,3);
	echo "<hr>";
	potencia(10,2);
	echo "<hr>";
	//potencia("2",20);//ERRO - não aceita strings
	//potencia(10);//ERRO - falta de argumentos, era esperado dois argumentos

	//versão 8 - atribuição explicita ao parametro da função
	potencia(base:7,expoente:2);//49
	echo "<hr>";
	potencia(expoente:2,base:2);//49
	
	


?>
<hr>


</body>
</html>