<?php
//todas as variaveis declaradas
$valor_da_compra = 500;
//Valor 0 é igual a sim || valor 1 iguala não
$vip= 0;

//Verificação se o cliente é vip ou gatou 500 ou mais
if($valor_da_compra >= 500 or $vip = 0){

echo'Cliente com desconto aplicado';
}
else{
    echo'Cliente com desconto negado';
}

?>