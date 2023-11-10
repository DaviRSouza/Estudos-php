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
        echo "<hr>";
        $parar = 3;
        $cont = 1;

        while($cont <= 50)
        {
            echo "$cont, ";
            if($cont == $parar)
            {
                break;
            }
            $cont++;
        }

        echo "<hr>";
        $pular = 3;
        $pular2 = 5;
        $cont = 1;

        while($cont <= 50)
        {
            if($cont == $pular || $cont == $pular2)
            {
                $cont++;
                continue;
            }
            echo "$cont, ";
            $cont++;
        }
    ?>
</body>
</html>