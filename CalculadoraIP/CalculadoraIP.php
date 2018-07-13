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


echo " <h4>Resultado do endereço IP</h4> ";


if($oc1==10 and $oc2>=0 and $oc2 <=255 and $oc3>=0 and $oc3<=255 and $oc4>=0 and $oc4<=255){
    echo "<ul><li>Ip privado</li></ul>";
}
elseif($oc1==172 and $oc2>=16 and $oc2 <=31 and $oc3>=0 and $oc3<=255 and $oc4>=0 and $oc4<=255){
    echo "<ul><li>Ip privado</li></ul>";
}
elseif($oc1==192 and $oc2==168 and $oc3>=0 and $oc3<=255 and $oc4>=0 and $oc4<=255){
    echo "<ul><li>Ip privado</li></ul>";
}else{
    echo "<ul><li>Ip público</li></ul>";
}


if ($oc4 <= 126){
    echo "<ul><li>Classe A</li></ul>";
}

elseif ($oc4 >= 128 AND $oc4 <= 191){
    echo "<ul><li>Classe B</li></ul>";
}


elseif ($oc4 >= 192 AND $oc4 <= 223){
    echo "<ul><li>Classe C</li></ul>";


}

elseif ($oc4 >= 224 AND $oc4 <= 239){
    echo "<ul><li>Classe D</li></ul>";

}

elseif($oc4 >= 240 AND $oc4 <= 256){
    echo "<ul><li>Classe E</li></ul>";

}else{
    echo "Não possui classe e é privado.";
}



echo "<ul><li>Quantidade de endereços em cada sub-rede: ".$enderecos."</li>";
echo "<li>Quantidade de sub redes: ".$sub_redes."</li>";
echo "<li>Quantidade de hosts/máquinas: ".$hosts."</li>";
echo "<li>Endereço de rede: ".$rede."</li>";
echo "<li>Endereço de host: ".$host."</li>";
echo "<li>Endereço de broadcast: ".$broadcast."</li>";
echo "<li>Último endereço de host: ".$ult_end."</li>";
echo "<li>Máscara de rede em decimal: ".$masc_dec."</li></ul>";
echo "<p>Alunos: Sarah Hoegen e Pedro Henrique   3info3</p>";
