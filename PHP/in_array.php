<?php
//cria uma variavel chamada pesquisa
$pesquisa= "maçã";

//cria um array chamada $fruta
$frutas = array("maçã", "banana", "laranja");

//verifica se o valor "banana" esta na array lista de $frutas
if (in_array("$pesquisa", $frutas)){
    //se for verdadeiro aparece "Banana está na lista de frutas"

    echo"$pesquisa está na lista de frutas";
}
else{
    //se for false aparece "Banana não está na lista de frutas"
    echo"$pesquisa não está na lista de frutas";
}



?>