<?php


?>
<!doctype html>
<html>
<head>
<title>Escape</title>
<meta charset="utf-8">
</head>
<body>
<?php
$nome = "David Bone";

?>

<hr>

<script type="text/javascript">
<!--
alert("\tOlá <?php echo $nome ?>! \n\nPrimeiro aviso");
//-->
</script>

<hr>

<script type="text/javascript">
<!--
alert("\tOlá <?= $nome ?>! \n Segundo aviso");
//-->
</script>

<hr>

<script type="text/javascript">
<!--
alert("\tOlá Eduardo! \n\nTerceiro aviso");
//-->
</script>

<hr>

<?php
    echo "<script type=\"text/javascript\">
    <!--
    alert(\"\tOlá $nome! \\n\\nQuarto aviso\");
    //-->
    </script>";
?>


<hr>

<?php
    echo "<script type=\"text/javascript\">\n";
    echo "<!--\n";
    echo "alert(\"\tOlá $nome ! \\n\\nQuinto Aviso\");\n"; 
    echo "//-->\n";
    echo "</script>\n";
?>

<?php
    echo >>>JAVA
    <script>
        alert("\tOlá $nome ! \\n\\nSexto Aviso"); 
    </script>
?>

<hr>


</body>
</html>
