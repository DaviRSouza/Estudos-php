<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
        $carros = ['Jimmy', 'Renegade', 'CRV', 'Toro', 'Duster', 'Opala', 'Fusca'];
        echo $carros[3];//toro
        echo "<hr>";
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        echo count($carros);//6
        echo sizeof($carros);//6
        echo "<hr>";
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //for($i=0;$i<6;$i++)
        for($i=0;$i<sizeof($carros);$i++)
        {
            echo $carros[$i]. "<br>";
        }

        echo "<hr>";

        //$carros[1]=jimmy
        //$carros[2]=renegade
        for($i=0;$i<sizeof($carros);$i++)
        {
            echo "\$carros [$i]=$carros[$i]" . "<br>";
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        echo "<hr>";
        //list somente para arrays numericos "0"
        list($a,$b,$c,$d,$e,$f,$g)=$carros;
        echo $a;//jimmy
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        echo "<hr>";
        $carros2 = implode('-', $carros);
        echo $carros2;
    ?>
</body>
</html>