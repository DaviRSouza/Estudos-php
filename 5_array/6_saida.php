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
        $linguagem['marcacao']="HTML5";
        $linguagem['estilos']="CSS";
        $linguagem['front']="JavaScript";
        $linguagem['backend']="PHP";
        $linguagem['DB']="MySQL";

        echo $linguagem['backend'];//php 
        echo '<br>';
        //concatenação
        echo 'o curso e de '. $$linguagem['backend'] . ' versão 8';
        echo '<br>';

        //echo $linguagem[backend];// php - ERRO
        echo "o curso e de $$linguagem[backend] versão 8";
        echo '<br>';

        //interpolação versão 7
        echo "o curso e de {$$linguagem['backend']} versão 8";
        echo '<br>';
    ?>
</body>
</html>