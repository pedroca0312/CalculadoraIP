<?php


 $oc1= $_POST['1octeto'];
 $oc2= $_POST['2octeto'];
 $oc3= $_POST['3octeto'];
 $oc4= $_POST['4octeto'];
 $final = $_POST['bits'];

 //Endereços em cada sub-rede
$resultado = 32-$final;
$enderecos = pow(2,$resultado);


//Sub-redes
$sub_redes= 256 / $enderecos;

//Hosts, maquinas
$host =$enderecos-2;

//endereço de rede
$resto=256-$enderecos;
while($final< $resto){
    $resto = $resto-$enderecos;
}
$rede=$resto;

//1 endereço de host
$host= $rede-1;

//Broadcast
$broadcast= $rede+($enderecos-1);

//Ultimo end
$ult_end=$broadcast -1;

//mascara de rede em decimal
$masc_dec= 256-$enderecos;

//classe
if($oc1 >= 1 AND $oc1 <= 126){
    echo "classe A";
}elseif($oc1 >= 128 AND $oc1 <= 191){
    echo "classe B";
}elseif($oc1 >= 192 AND $oc1 <= 223){
    
}

