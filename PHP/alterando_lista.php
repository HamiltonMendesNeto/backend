<?php
/*
//cria a array Lista de Frutas

$lista_frutas= ["Banana","Maçã","Morango","Uva"];

echo "$lista_frutas[0]";

//Alterando o valor 0 -> Banana para Melancia

$lista_frutas[0] = "Melancia";

echo "<hr>";
echo $lista_frutas[0];
*/

//cria a array Lista de Frutas

$lista_frutas= ["Banana","Maçã","Morango","Uva"];

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0];
echo '<hr>';
echo '</pre>';

echo '<pre>';
$lista_frutas[0] = "Meleancia";
print_r($lista_frutas);
echo"<br>";

echo "$lista_frutas[0]";

//Alterando o valor 0 -> Banana para Melancia

$lista_frutas[0] = "Melancia";

echo "<hr>";
echo $lista_frutas[0];



?>
