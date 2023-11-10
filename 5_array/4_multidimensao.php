<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/*
$musica['rock'][0]="Led Zepelin";
$musica['rock'][1]="Ramones";
$musica['rock'][2]="The Clash";
$musica['mpb'][0]="Chico";
$musica['mpb'][1]="Caetano";
$musica['mpb'][2]="Gil";
$musica['pop'][0]="Madona";
$musica['pop'][1]="Madona";
$musica['pop'][2]="GaGA";
$musica['forro']="Dominguinhos";
*/

$musica=[
			'rock'=>["Led Zepelin","Ramones","The Clash"],
			'mpb'=>["Chico","Caetano","Gil"],
			'pop'=>["Madona","Madona","GaGA"],
			'forro'=>"Dominguinhos"
		];



foreach($musica as $ind=>$aux)
{
	if(is_array($aux))
	{
		foreach($aux as $ind2=> $value)
		{
			echo "\$musica[$ind][$ind2]=$value<br>"; 
		}
	}else
	{
		echo "\$musica[$ind] = $aux";
	}
}

echo "<hr>";






echo count($musica);//4
echo "<br>";
echo count($musica, true);//14 - seria o numero de conteudos
echo "<br>";
echo $musica ['mpb'][1];//Caetano
echo "<br>";
echo "<pre>";
	var_dump($musica);
echo "</pre>";

extract($musica);
echo "<br>";
echo "<pre>";
	var_dump($rock);
echo "</pre>";

echo "<br>";
list($a,$b,$c)=$rock;
echo "<pre>";
	var_dump($a);
echo "</pre>";
?>
</body>
</html>