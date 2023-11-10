<?php 
define("HR","<hr>");

###############ARREDONDAMENTO##################
$num = 1236698754.987159;

echo ceil($num);//teto - para cima
echo HR;

echo floor($num);//chão - para baixo
echo HR;

echo round($num);// próximo
echo HR;

####################sorteio##############

echo rand(10,50);
echo HR;
echo chr(65);
echo HR;
echo chr(90);
echo HR;
echo chr(rand(65,90));
echo HR;
############################################
#######potencia e raiz quadrada#########
echo pow(2,3);
echo HR;
echo sqrt(49);
echo HR;
echo pow(8,1/3);
#############################################

echo HR;
echo min(9,5,8);
echo HR;
echo max(9,5,8);
echo HR;
#############################################
echo intdiv(3, 2);

echo pi();
#############################################
//number_format;
echo number_format($num);
echo HR;
echo number_format($num,2);
echo HR;
echo number_format($num,2,",",".");
echo HR;

?>