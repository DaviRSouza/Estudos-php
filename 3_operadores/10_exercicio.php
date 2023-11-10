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
        $a = 2;
        $b = 4;
        $c = -6;

        $delta = $b ** 2 - 4 * $a * $c;//64
        echo "valor do delta: $delta". "<hr>";
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        echo "As raízes da equação são: x1 = $x1 e x2 = $x2";
    ?>
</body>
</html>