<?php
/*
//Criando o array Lista_coisas

$lista_coisas= [];


//Criando um array frutas, dentro sa array lista_coisas

$lista_coisas["Frutas"] = ["Banana", "Maçã", "Morango", "Uva"];

//Criando uma array pessoas, dentro de array lista_coisas

$lista_coisas["Pessoas"] = ["João", "José", "Maria"];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';
*/
//------------------------------------------------------------------------------------------------------//

//Criando o array Lista_coisas

$lista_coisas= [];


//Criando um array frutas, dentro sa array lista_coisas

$lista_coisas["Frutas"] = ["Banana", "Maçã", "Morango", "Uva"];

//Criando uma array pessoas, dentro de array lista_coisas

$lista_coisas["Pessoas"] = ["João", "José", "Maria"];

//Altera os valores da lista Frutas
$lista_coisas["Fretas"][2] ="Abacaxi";

//Altera oos valores da lista Pessoas

$lista_coisas["Pessoas"][1]="Mario";

echo "O terceiro valor da array FRUTAS agora é; ";
echo $lista_coisas['Frutas'][2];

echo '<hr>';

echo " O segundo valor da array PESASOAS agora é:";
echo $lista_coisas['Pessoas'][1];





?>