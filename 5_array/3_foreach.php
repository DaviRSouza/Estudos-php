<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
        $carros=[   'Suzuki'    => 'jimmy',
                    'Jeep'      => 'renegade',
                    'Honda'     => 'CRV',
                    'Fiat'      => 'Toro',
                    'Duster'    => 'duster',
                    'Chevrolet' => 'Opala',
                    'VK'        => 'Fusca'
                ];
        //retornando indice e conteudo
        foreach($carros as $indice=>$conteudo)
        {
            echo "$indice - $conteudo <br>";
        }

        echo "<hr>";
        //retornando somente conteudo
        foreach($carros as $conteudo)
        {
            echo "$conteudo <br>";
        }

        //Transforma os indices do array em variaveis comuns.
        echo "<hr>";
        extract($carros);
        echo $Suzuki, "<br>";//Jimmy
        echo $Honda, "<br>";//CRV

        //
        echo "<hr>";
    ?>
</body>
</html>