<?php

 $oc1= $_POST['oc1'];
 $oc2= $_POST['oc2'];
 $oc3= $_POST['oc3'];
 $oc4= $_POST['oc4'];
 $final = $_POST['mascara'];

 //Endereços em cada sub-rede
$resultado = 32-$final;
$enderecos = pow(2,$resultado);

//Sub-redes
$sub_redes= 256 / $enderecos;

//Hosts, maquinas
$hosts =$enderecos-2;

//endereço de rede
$resto=256-$enderecos;
while($oc4< $resto){
    $resto = $resto-$enderecos;
}
$rede=$resto;

//1 endereço de host
$host= $rede+1;

//Broadcast
$broadcast= $rede+($enderecos-1);

//Ultimo end
$ult_end=$broadcast -1;

//mascara de rede em decimal
$masc_dec= 256-$enderecos;

if ($oc4 <= 126){
    echo "<br>Classe A<br>";
}

elseif ($oc4 >= 128 AND $oc4 <= 191){
    echo "<br>Classe B<br>";
}


elseif ($oc4 >= 192 AND $oc4 <= 223){
    echo "<br>Classe C<br>";


}

elseif ($oc4 >= 224 AND $oc4 <= 239){
    echo "<br>Classe D<br>";

}

elseif($oc4 >= 240 AND $oc4 <= 256){
    echo "<br>Classe E<br>";

}else{
    echo "Não possui classe e é privado.";
}

if($oc1==10 and $oc2>=0 and $oc2 <=255 and $oc3>=0 and $oc3<=255 and $oc4>=0 and $oc4<=255){
    echo "Ip privado";
}
elseif($oc1==172 and $oc2>=16 and $oc2 <=31 and $oc3>=0 and $oc3<=255 and $oc4>=0 and $oc4<=255){
    echo "Ip privado";
}
elseif($oc1==192 and $oc2==168 and $oc3>=0 and $oc3<=255 and $oc4>=0 and $oc4<=255){
    echo "Ip privado";
}else{
    echo "Ip público";
}

echo "<ul><li>Quantidade de endereços em cada sub-rede: ".$enderecos."</li>";
echo "<li>Quantidade de sub redes: ".$sub_redes."</li>";
echo "<li>Quantidade de hosts/máquinas: ".$hosts."</li>";
echo "<li>Endereço de rede: ".$rede."</li>";
echo "<li>Endereço de host: ".$host."</li>";
echo "<li>Endereço de broadcast: ".$broadcast."</li>";
echo "<li>Último endereço de host: ".$ult_end."</li>";
echo "<li>Máscara de rede em decimal: ".$masc_dec."</li></ul>";