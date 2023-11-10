<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <select name="Carros" id="Carros" class="formata">
            <option value="rp">Ribeirão Preto</option>
            <option value="ss">São Sebastião</option>
            <option value="pg" selected>Praia Grande</option>
            <option value="sp">São Paulo</option>
        </select>
    </form>

    <hr>

    <form>
        <?php
            $carros = ['Jimmy', 'Renegade', 'CRV', 'Toro', 'Duster', 'Opala'];

            echo "<select name=\"Carros\" id=\"Carros\" class=\"formata\">\n";
            foreach($carros as $marca=>$modelo)
                {
                    echo "\t\t\t<option value=\"$marca \">$modelo</option> \n";
                }
            echo "\t\t</select>\n";
        ?>
    </form>
</body>
</html>