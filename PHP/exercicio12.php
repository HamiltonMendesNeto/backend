<?php

//criando uma array cadastro
$cadastro = [];

//criandoum array nome, dentro da array cadastro
$cadastro['nome']= ['hamilton', 'enzo', 'guilherme', 'gabriel,', 'bia'];

//criando umarray email, dentro da array cadestro
$cadastro['email']= ['hamilton@gmail', 'enzo@gmail','gui@gmail','ga@gmail','bia@gmail'];

$cadastro['nome'][2] = 'senai';
$cadastro['email'][3]= 'aluno@senai.br';

echo '<pre>';
echo '<br>';
echo $cadastro['nome'][2];
echo $cadastro['email'][3];
echo '<pre>';



?>