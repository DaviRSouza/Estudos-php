<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade;$curso;

        $idade = 18;
        
        if($idade>=18)
        {
            echo "Pode ver!!!<br>";
        }else
        {
            echo "NÂO Pode ver!!!<br>";
        }
        echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        if($idade>=18):
        
            echo "Pode ver!!!<br>";
        else:
            echo "NÂO Pode ver!!!<br>";
        endif;
        echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        if($idade>=18) echo "Pode ver!!!<br>";
        else echo "NÂO Pode ver!!!<br>";
        echo "<hr>";
    ?>
</body>
</html>