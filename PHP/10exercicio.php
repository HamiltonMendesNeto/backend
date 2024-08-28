<?php

//cria a array Lista de numeros
$numeros= array(1,2,3,4,5,6,7,8,9,10);

//print_r vai escrever a lista
echo '<pre>';
print_r($numeros);
echo '<hr>';
echo '</pre>';


echo '<br>';
echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];


//Alterando o valor 0 -> 100 
//Alterando o valor 4 -> 500
//Alterando o valor 9 -> 1000 
echo '<pre>';
$numeros[0] = 100;
$numeros[4] = 500;
$numeros[9] = 1000;

//print_r vai escrever a lista
echo '<pre>';
print_r($numeros);
echo '<hr>';
echo '</pre>';

//Mostra os valores alterados
echo "Valores alterados";
echo '<br>';
echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];



?>