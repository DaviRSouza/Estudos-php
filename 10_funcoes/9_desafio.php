<?php
function arrayCount(array $i):int
{
    $c=0;
    foreach($i as $conteudo)
    {
        $c++;
    }
    return $c;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ruas  =['caio graco', 'aurelia', 'tito', 'clelia', 'mario', 'scipiao'];
        $cores =['amarelo', 'azul', 'rosa', 'verde'];
        $teste = 'testando';

        echo arrayCount($ruas);
        echo "<hr>";
        echo arrayCount($cores);
        echo "<hr>";
        //echo arrayCount($teste); // retornara erro, pois a função apenas aceita ARRAY igual declarado, msm se tirar a declaração array, o foreach aceita apenas array


    ?>
</body>
</html>