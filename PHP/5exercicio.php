<?php
//cria uma fução chamada tabuada($i, $multiplicador) 
function tabuada($i, $multiplicador){
        return $multiplicador * $i;
        //pede para as variaveis $multiplicador e $i
        return $multiplicador * $i;
}

$multiplicador= 2;

//cria uma lista de 1 a 10 e multiplica pela $multiplicador
for($i= 1; $i <= 10; $i++){
    $resulatado= tabuada($i, $multiplicador);

    echo "$i X $multiplicador = $resulatado <br/>";

}




?>
