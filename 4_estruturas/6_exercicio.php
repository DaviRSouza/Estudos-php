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
    
    $n1=7; $n2=7; $n3=7; $n4=7;
    $media = ($n1+$n2+$n3+$n4)/4;
    if($media >= 7)
    {
        echo "Aprovado";

    }elseif($media >= 5)
    {
        echo "Recuperação";

    }else
    {
        echo "Reprovado";
    }
    ?>
</body>
</html>