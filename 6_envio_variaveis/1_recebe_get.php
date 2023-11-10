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
    echo "<pre>";
        var_dump($GLOBALS);
    echo "</pre>";
    /////////////////////////////////////////////////////////////////////////////////
    echo "<hr>";

    echo "<pre>";
        var_dump($_GET);
    echo "</pre>";
    echo "<hr>";
    echo "seu nome é {$_GET['nome']} <br> \n";
    echo "seu nome é {$_GET['curso']} <br> \n";
    echo "seu nome é {$_GET['idade']} <br> \n";
?>
</body>
</html>