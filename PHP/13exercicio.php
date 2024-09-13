<?php
$pesquisa="João";

$nomes = array("Ana", "Hamilton", "Gabrial", "Arthur", "Luis", "Rafael", "Valter", "Ricardo", "Enzo", "Daniel");

//verifica se o valor "x" esta na array lista de $frutas
if (array_search($pesquisa, $nomes)){
    //se for verdadeiro aparece "Banana está na lista de frutas"

    echo"$pesquisa foi encontrado na base de dados";
}
else{
    //se for false aparece "x" não está na lista de frutas"
    echo"$pesquisa não foi encontrado na base de dados";
}
?>