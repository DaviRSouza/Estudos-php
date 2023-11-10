<!doctype html>
<html>
<head>
<title>RECEBE GET</title>
<meta charset="utf-8">
</head>
<body>
<?php 
    //valores acrescentados às variaveis através da URL - recebe_get.php?nome=edu+pretel&idade=34
    //arrays super globais - $_GET $_POST $_COOKIE e outros
    //variaveis pre-definidas
    /////////////////////////////////////////////////////////////////////////////////
    echo "<hr>";

    echo "<pre>";
        var_dump($_POST);
    echo "</pre>";
    echo "<hr>";
    echo "seu nome é {$_POST['nome']} <br> \n";
    echo "seu nome é {$_POST['curso']} <br> \n";
    echo "seu nome é {$_POST['idade']} <br> \n";
?>
</body>
</html>