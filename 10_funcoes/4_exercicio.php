<?php
	
	function MontaSelect(array $itens,string $name,string $id, string $class=""):string
	{
		if(!empty($class))
		{
			$class="class=\"$class\"";
		}
		$select = "\t<select name=\"$name\" id=\"$id\" class=\"$class\">\n";
		foreach($itens as $value=>$label)
		{ 
			$select =  $select . "\t\t<option value=\"$value\">$label</option> \n";
		} 
		$select .= "\t</select>\n";//$saida = $saida."\t</select>\n";
		return $select;
	}

	$carros=['Jimmy','Renegade','CRV','Toro','Duster','Opala','Fusca'];
	$frutas=['parece' => 'tomate', 'pelo'=>'kiwi','amarelo'=>'laranja','verde'=>'abacate'];
	$avioes=['airbus'=>'A380', 'boeing'=>'787', 'embraer'=>'Ej195']
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<?php echo MontaSelect($carros, 'carros', 'car', 'estilos'); ?>
		<hr>
		<?= MontaSelect($frutas, 'frutas', 'fruits', 'purpura'); ?>
		<hr>
		<?= MontaSelect($avioes, 'avioes', 'airplanes'); ?>
		<hr>
	</form>
<form>

</form>
</body>
</html>