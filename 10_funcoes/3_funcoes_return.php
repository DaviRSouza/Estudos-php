<?php
//5.0 - Obj
//5.1 - array
//5.4 = callable 
//7 - bool, float, int , string
//padrao => modo coercivo

// função que não retorna coisas eram chamada de procedimentos ou subrotina
// função não printa
// função devem retornar coisas
function potencia(int $base,int $expoente):float
{
	//$num1=5;
	//$num2=8;
	$total=$base**$expoente;
	return $total;
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
		echo potencia(2,3);
		echo "<hr>";
		echo (potencia(2,3) + potencia(3,2))*2;
		echo "<hr>";
		echo potencia(potencia(2,3) + potencia(3,2), 2);//289
		//echo potencia((8 + 9),2);
		//echo potencia(17,2);
		//echo 289
	?>

<hr>


</body>
</html>