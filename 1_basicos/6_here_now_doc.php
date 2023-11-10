<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
    $nome = "anitta";

    #heredoc - INTERPOLAÇÃO DE VARIAVEL
    echo <<<"LISTAS"
    <p>OLÁ "$nome" !!!!!!!</p>
    <p>Seus Cursos</p>
    <ul>
        <li>PHP</li>
        <li>JavaScript</li>
        <li>MySQL</li>
    </ul>
    LISTAS;

    #Nowdoc - INERPOLAÇÃO DE VARIAVEL
    echo <<<'LISTAS'
    <p>OLÁ "$nome" !!!!!!!</p>
    <p>Seus Cursos</p>
    <ul>
        <li>PHP</li>
        <li>JavaScript</li>
        <li>MySQL</li>
    </ul>
    LISTAS;


?>
</body>
</html>