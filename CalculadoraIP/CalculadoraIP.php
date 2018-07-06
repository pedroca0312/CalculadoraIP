<?php

require_once "index.php";

 $oc1= $_POST['1octeto'];
 $oc2= $_POST['2octeto'];
 $oc3= $_POST['3octeto'];
 $oc4= $_POST['4octeto'];
 $final = $_POST['bits'];

$oc4=150;
$final=25;

 //Endereços em cada sub-rede
$resultado = 32-$final;
$enderecos = pow(2,$resultado);
echo $enderecos." e ";

//Sub-redes
$sub_redes= 256 / $enderecos;
echo $sub_redes." e ";
//Hosts, maquinas
$hosts =$enderecos-2;
echo $hosts ." e ";
//endereço de rede
$resto=256-$enderecos;
while($oc4< $resto){
    $resto = $resto-$enderecos;
}
$rede=$resto;
echo $rede ." e ";

//1 endereço de host
$host= $rede-1;

//Broadcast
$broadcast= $rede+($enderecos-1);
echo $broadcast. " e ";
//Ultimo end
$ult_end=$broadcast -1;
echo $ult_end ." e ";
//mascara de rede em decimal
$masc_dec= 256-$enderecos;
echo $masc_dec ." e ";


//classe
//if($oc1 >= 1 AND $oc1 <= 126){
//    echo "classe A";
//}elseif($oc1 >= 128 AND $oc1 <= 191){
//    echo "classe B";
//}elseif($oc1 >= 192 AND $oc1 <= 223){
//    
//}

