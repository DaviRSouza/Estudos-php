<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	$nota = 10;
	if($nota == 10)
	{
		echo "Parabens vc tirou a nota maxima";
	}

	echo "<hr>";

	if($nota == 10):
		echo "Parabens vc tirou a nota maxima";
	endif;

	echo "<hr>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//quando tiver apenas uma instrução dentro do if

	if($nota == 10)
		echo "Parabens vc tirou a nota maxima";
	echo "<hr>";

	if($nota == 10) echo "Parabens vc tirou a nota maxima";

	echo "<hr>";
?>
</body>
</html>