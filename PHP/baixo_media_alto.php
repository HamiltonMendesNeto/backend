<?php

for($numero= 1; $numero <= 10; $numero++){

$categoria_do_numero;

$par_impar = ($numero % 2 ==0) ? "é um número par" : "é um número impar ";

switch ($numero){
    case $numero <=3:
    $categoria_do_numero= 'baíxo';
        break;

    case $numero <=7:
        $categoria_do_numero= 'média';
        break;
    case $numero<=10:
        $categoria_do_numero= 'alto';
        break;
    default:
        $categoria_do_numero="Esse número não existe";
        break;

    }
    echo"$numero $par_impar e está na categoria $categoria_do_numero. <br/>";
}

?>