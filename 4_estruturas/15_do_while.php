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
        $cont = 10;
        while($cont <= 3)
        {
            echo "Senac <br>";
            $cont++;
        }

        echo "<hr>";

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //do ..while
        //repita até
        //ao menos uma vez ele execulta as instruções entre as chaves

        $cont = 10;
        do
        {
            echo "Senac <br>";
            $cont++;
        }while($cont <= 3);

            echo "<hr>";
    ?>
  </body>
  </html>