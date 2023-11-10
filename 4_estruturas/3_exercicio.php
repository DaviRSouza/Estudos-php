 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
        $num = 150;
        $num2 = 151;

        if($num%2 == 0)
        {
            echo "O numero $num é par";
        }else
        {
            echo "O numero $num é impar";
        }
        
        echo "<hr>";

        if(is_int($num2/2))
        {
            echo "O numero $num2 é par";
        }else
        {
            echo "O numero $num2 é impar";
        }
        
    ?>
 </body>
 </html>