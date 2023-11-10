<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 
    #delimitadores de string
    #string são os tpos de dados, no caso, aqui seria um varchar, e fica dentro de aspas duplas""
    echo "eu não matei joana d'arc";
    echo "<BR>";
    #caso tenha aspas duplas dentro do texto, use aspas simples
    echo 'eu não gosto da "linda" voz daquela cantora';
    echo '<BR>';
    #escape - que é o especial \
    echo 'Eu não matei joana D\'arc';
    echo '<BR>';

    echo "eu nao gosto da \"linda\" voz daquela cantora";
    echo "<HR>";

    #interpolações variavel
    $nome = "senac";

    #aspas simples é mais perfomatica
    echo 'O $nome fica na rua tito'; #padrão de logica de programação
    echo '<BR>';
    echo 'o '. $nome . ' fica na rua tito'; #cancatenação
    echo '<br>';

    #e menos perfomatica pois a string sera avaliada antes de impressa
    echo "O $nome fica na rua tito"; #interpolação de variavel
    echo "<BR>";
    echo "<HR>";

    #inserir o caracter de $ na string  \$ - e chamada escape
    echo "o conteudo da variavel \$nome é $nome";

?>
</body>
</html>
