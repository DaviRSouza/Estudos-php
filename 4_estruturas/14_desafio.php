   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
        <table border="1">
            <tr><!-- Table Row - linha da tabela -->
                <td>1-1</td>><!-- Table data - dado da tabela - celula -->
                <td>1-2</td>>
                <td>1-3</td>>
            </tr>

            <tr>
                <td>2-1</td>>
                <td>2-2</td>>
                <td>2-3</td>>
            </tr>

            <tr>
                <td>3-1</td>>
                <td>3-2</td>>
                <td>3-3</td>>
            </tr>
        </table>
        <hr>

        <?php
            $numlinhas = 5;
            $numcolunas= 5;
            echo "<table border=\"1\">\n";
            for($i=1;$i<=$numlinhas;$i++)
            {
                echo "\t\t<tr>\n";
                    for($c=1;$c<=$numcolunas;$c++)
                    {
                        echo "\t\t\t<td>$i-$c</td>\n";
                    }
                echo "<\t\t/tr>\n";
            }
            echo "\t</table>\n";
        ?>
   </body>
   </html>