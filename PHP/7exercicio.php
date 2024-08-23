<?php
$numeroMAX= 5718;//Valor selecionado pelo o usuario
$lista= 1;

//O do serve para o codigo até comprir o que o while está dizendo
do{

    $lista++;

    if (($lista % 2) != 0){
        echo "$lista <br/>";
    }
}
//O while vai verificar o que o do está pedindo
while($lista <= $numeroMAX);

?>
