<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	// atribuição explicita
		$cores[0]="azul";
		$cores[1]="Amarelo";
		$cores[2]="Verde";
		$cores[3]="Vermelho";

		//echo $cores; warning - array
		echo "<pre>";
		var_dump($cores);
		echo "</pre>";

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "<hr>";
		//atribuição implicita
		$ruas[]="Tito";
		$ruas[]="Duilio";
		$ruas[]="Vespasiano";
		$ruas[]="Clelia";
		echo "<pre>";
		var_dump($ruas);
		echo "</pre>";
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "<hr>";
		//array nominativo
		$linguagem['marcacao']="HTML5";
		$linguagem['estilos']="CSS";
		$linguagem['front']="JavaScript";
		$linguagem['backend']="PHP";
		$linguagem['DB']="MySQL";
		echo "<pre>";
		var_dump($linguagem);
		echo "</pre>";
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "<hr>";
		//construtor array
		//forma implicita
		$bairros = array('pompeia', 'sumara', 'perdizes', 'vila romana', 'lapa');
		echo "<pre>";
		var_dump($bairros);
		echo "</pre>";

		//forma explicita
		$cidades = array('litoral' => 'ilhabela','serra'=>'campos de jordão', 'interios'=> 'embu guaçu');
		echo "<pre>";
		var_dump($cidades);
		echo "</pre>";
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "<hr>";
		//forma reduzida - a mais utilizada atualmente
		//forma implicita
		$frutas = ['pera', 'Uva', 'Maça'];
		echo "<pre>";
		var_dump($frutas);
		echo "</pre>";

		//forma explicita
		$desing = [		0=>'inDesing',
						'Imagens'=> 'photoshop',
						20=> 'ilustratir',
						'animacao'=>'flash'
				  ];
		echo "<pre>";
		var_dump($desing);
		echo "</pre>";
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo "<hr>";
		$alunos='maria,jose,ivan,luis,lais';
		echo "<pre>";
		var_dump($alunos);
		echo "</pre>";

		$alunos = explode(',', $alunos);
		echo "<pre>";
		var_dump($alunos);
		echo "</pre>"
	?>
</body>
</html>