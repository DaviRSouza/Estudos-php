<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>



<?PHP
echo"Isto divide em 3 linhas
\tEsta é a segunda linha
\t\tquebras de linha serão mostradas também
\testa é a quarta ";

echo "\n\n<hr>\n\n";

echo "Isto divide em 3 linhas\n Esta é a segunda\n linha quebras de linha serão mostradas também\n esta é a quarta";

echo "\n\n<hr>\n\n";

echo nl2br("Isto divide em 3 linhas
Esta é a segunda linha
quebras de linha serão mostradas também
esta é a quarta ") ;
//Linguagem C nativa
//no Windows - char13 - quebra de linha
//32 espaço
//8 backspace
//tableascii.com
?>


</body>
</html>
