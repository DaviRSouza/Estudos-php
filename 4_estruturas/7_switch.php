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
        $num = 2;
        switch($num)
        {
            case 1:
                echo "O valor é 1";
                break;
            case 2:
                echo "O valor é 2";
                break;
            case 3:
                echo "O valor é 3";
                break;
            default:
                echo "O valor é invalido";
        }

    ?>
</body>
</html>