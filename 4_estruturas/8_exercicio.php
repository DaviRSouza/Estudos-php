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
        $hoje = date_create('now');
        echo date_format($hoje, 'd/m/Y h:i:s');
        //pesquisar no php.net por Date_Format
        //para dia da semana: 'w' - 0 domingo ate 6 para sabado.
        echo date_format($hoje, 'w');
        echo "<hr>";
        //para dia da semana: 'n' - o numero do mes
        echo date_format($hoje, 'n');
        //utilizando o switch - serão nescessario 2 switchs
        //retornar: terça-feira, 02 de maio de 2023
        echo "<hr>";

        $dia_da_semana = date_format($hoje, 'w');
        $mes = date_format($hoje, 'n');

        switch ($dia_da_semana)
        {
            case 0:
                $dia_da_semana = "domingo";
                break;
            case 1:
                $dia_da_semana = "segunda-feira";
                break;
            case 2:
                $dia_da_semana = "terça-feira";
                break;
            case 3:
                $dia_da_semana = "quarta-feira";
                break;
            case 4:
                $dia_da_semana = "quinta-feira";
                break;
            case 5:
                $dia_da_semana = "sexta-feira";
                break;
            case 6:
                $dia_da_semana = "sábado";
                break;
        }

        switch ($mes)
        {
            case 1:
                $mes = "janeiro";
                break;
            case 2:
                $mes = "fevereiro";
                break;
            case 3:
                $mes = "março";
                break;
            case 4:
                $mes = "abril";
                break;
            case 5:
                $mes = "maio";
                break;
            case 6:
                $mes = "junho";
                break;
            case 7:
                $mes = "julho";
                break;
            case 8:
                $mes = "agosto";
                break;
            case 9:
                $mes = "setembro";
                break;
            case 10:
                $mes = "outubro";
                break;
            case 11:
                $mes = "novembro";
                break;
            case 12:
                $mes = "dezembro";
                break;
        }

        echo $dia_da_semana . ", " . date_format($hoje, 'd') . " de " . $mes . " de " . date_format($hoje, 'Y');

    ?>
</body>
</html>