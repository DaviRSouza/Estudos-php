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
    //para retornar false
    //$login = ""
    //$login = 0;
    //$login = "0";
    //$login = "NULL";
    //$login = "false";
    //$login = "FALSE";
    //o resto retornara verdadeiro

    $login = "feriado";
    
    if($login)
    {
        echo "Autenticado!!!!!";
    }else
    {
        echo "Não Autorizado!!!!";
    }

    //Negação
    if(!$login)
    {
        echo "Autenticado!!!!!";
    }else
    {
        echo "Não Autorizado!!!!";
    }
    ?>
</body>
</html>