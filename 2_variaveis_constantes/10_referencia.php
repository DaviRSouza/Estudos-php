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
        //atribuição por valor
        $a = 3;
        echo "$a<br>";//3

        $b = $a;
        echo "$b<br>";//3

        $a = 50;
        echo "$a<br>";//50
        echo "$b<br>";//3

        /////////////////////////////////////////////////////
        //atribuição por referencia - a variavel recebe uma referencia da outra, as duas terão os mesmo endereços de memoria. simbolo usado '&'
        echo "<hr>";

        $c = 3;
        echo "$c<br>";//3

        $d = &$c;
        echo "$d<br>";//3

        $c = 50;
        echo "$c<br>";//50
        echo "$d<br>";//50




    ?>
</body>
</html>