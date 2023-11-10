<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <!-- comentario html-->
    <p>A instituição <span style="color:red">senac</span> fica na rua tito</p>
    <hr>

    <?php
      //fazer um programa que conte de 1 ate 50
      //pares serão vermelhos e os impares pretos
      $c = 1;
      while($c <= 50)
      {
          echo "$c, ";
          $c++;
      }
      echo "<hr>";
      $c = 1;
      while($c <= 50)
      {
        if($c==30)
        {
          echo "<span style=\"color:green\">$c</span>, ";
        }elseif(is_int($c/5))
        {
          echo "<span style=\"color:blue\">$c</span>, ";
        }elseif(is_int($c/2))
        {
          echo "<span style=\"color:red\">$c</span>, ";
        }else
        {
          echo "$c, ";
        }
        $c++;

      }
      echo "<hr>";

    ?>
  </body>
  </html>