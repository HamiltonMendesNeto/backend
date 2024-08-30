<?php


//Cria uma array CADASTRO
$Cadastro = [];

//Adiciona uma array USUARIO dentro do array cadastro 
$Usuario_senha["Usuario"] = ["João", "Maria", "Pedro"];

//Adiciona uma array SENHA dentro do array cadastro 
$Usuario_senha["Senha"] = ['1234', 'abcd', '5678'];

//Muda o valor 1 da array USUARIO Maria= Ana
$Usuario_senha["Usuario"][1]= "Ana";

//Muda o valor 1 da array SENHA abec= efgh
$Usuario_senha["Senha"][1]= "efgh";

echo "O segundo valor da array USUARIO agora é; ";
echo $Usuario_senha['Usuario'][1];

echo '<hr>';

echo " O segundo valor da array SENHA agora é:";
echo $Usuario_senha['Senha'][1];





?>