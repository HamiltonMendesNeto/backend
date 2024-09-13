<?php
//variavel pesquisa
$pesquisa="banana";
// cria um array chamado $frutas

$frutas = array("maçã", "banana", "laranja");

$indice = array_search($pesquisa, $frutas);

if($indice !==false){
    echo"$pesquisa foi encontrado na lista de frutas";

}
else{
    echo"$pesquisa não foi encontrado na lista de frutas";
}

?>