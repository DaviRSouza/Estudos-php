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
        $cont = 1;
        while($cont <= 3)
        {
            echo "Senac <br>";
            $cont++;
        }

        echo "<hr>";

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //para ou for
        //para $cont de 1 ate 10 passo 1 faça

        for($cont=1;$cont<=3;$cont++)
        {
            echo "$cont <br>";
        }

        echo "<hr>";
    ?>
  </body>
  </html>