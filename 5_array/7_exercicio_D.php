<?php
    $carros = ['Jimmy','Renegade','CRV','Toro','Duster','Opala','Fusca'];

    $saida =  "\t<select name=\"carros\" id=\"carros\" class=\"formata\">\n";
    foreach($carros as $marca=>$modelo){ 
        $saida =  $saida . "\t\t<option value=\"$marca\">$modelo</option> \n";
    } 
    $saida .= "\t</select>\n";//$saida = $saida."\t</select>\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
    <select name="cidade" id="city" class="formata">
        <option value="rp">Ribeirão Preto</option>
        <option value="ss">São Sebastião</option>
        <option value="pg" selected>Praia Grande</option>
        <option value="sp">São Paulo</option>
    </select>

    <hr> 
<?= $saida ?>
</form>
</body>
</html>