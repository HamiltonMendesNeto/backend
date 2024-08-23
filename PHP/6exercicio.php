<?php

$i = 9; //numero escolhido pelo usuario
$i = ceil($i);

//verifica se o numero escolhido é positivo
if ($i < 1){
    echo "Número solicitado invalido";
    return;
}

$lista = 1;
while ($lista <= $i){
    //exibi o numero caso ele for par
    if (($lista % 2) == 0) {
        echo "$lista <br/>";
    }

    $lista++;
}

?>
