<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php
    echo "comando de saida ECHO";
    echo "<BR>";
    echo ("comando de saida ECHO como FUNÇÂO");
    echo "<HR>";

    print "comando de saida PRINT";
    print "<BR>";
    print ("comando de saida PRINT como FUNÇÂO");
    print "<HR>";

    //o echo não faz o que esta na linha abaixo
    $ret = print ("comando de saida PRINT como função");
    print "<BR>";
    print $ret;
?>
<hr>

</body>
</html>