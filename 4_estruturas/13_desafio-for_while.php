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
        //qual é o 1o mutiplo comum de 11,13 e 17
        $c=1;//contadora - ira contar quantas vezes o laço girou
        $a= false;// sera a variavel controladora do laço
        while($a  === false)
        {
            if(is_int($c/11) && is_int($c/13) && is_int($c/17))
            {
                echo $c;
                $a = true;
                break;
            }
            $cont++;
        }


        echo "<hr>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //pode ser feito com while ou com o for
        //faça com o for
        //quais são os multiplos de 3 que estão entre 1 e 100
        for($cont=1;$cont<=100;$cont++)
        {
            if(is_int($cont/3))
            {
                echo "$cont, ";
            }
        }
    
    
    ?>
 </body>
 </html>