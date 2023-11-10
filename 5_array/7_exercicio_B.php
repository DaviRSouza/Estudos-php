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

    <?php
        $carros = ['Jimmy', 'Renegade', 'CRV', 'Toro', 'Duster', 'Opala'];
    ?>

    <form>
        <select name="Carros" id="Carros" class="formata">
         <?php foreach($carros as $marca=>$modelo)
            {
                echo "\t<option value=\"$marca \">$modelo</option> \n";
            }
         ?>  
        </select>
    </form>
</body>
</html>