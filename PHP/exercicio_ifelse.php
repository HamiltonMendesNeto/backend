<?php
//todas as variaveis declaradas
$prova1 = 6;
$prova2 = 8;
$prova3 = 9;
$media = ($prova1 + $prova2 + $prova3) / 3;

//todas as mensagems que vão aparecer no php

echo'A nota da sua primeira prova foi:' . $prova1;
    echo "<br>";
    
echo'A nota da sua segunda nota foi:' . $prova2;
    echo "<br>";

echo'A nota da sua terceira prova foi:' . $prova3;
    echo "<br>";

echo'A sua media final foi:' . $media;
    echo "<br>";

//verificação da media do aluno para aprovação
if($media >= 7){
    echo' Você foi aprovado';

}
else{
    echo'Você foi reprovado';
}




?>