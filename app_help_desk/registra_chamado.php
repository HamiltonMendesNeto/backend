<?php

echo "<pre>";
print_r ($_POST);
echo "</pre>";

//Cria a array para armasenar os valores de titulo, categoria e descrição
$variavel_titulo = $_POST['titulo'];
$variavel_categoria = $_POST['categoria'];
$variavel_descricao = $_POST['descricao'];

$texto = $variavel_titulo.'|'.$variavel_categoria.'|'.$variavel_descricao;

echo "$texto";

$arquivo = fopen ('registro.txt', 'a');

fwrite ($arquivo, '$texto');

fclose ($arquivo);


?>