<?php

echo "<pre>";
print_r ($_POST);
echo "</pre>";

//Cria a array para armasenar os valores de titulo, categoria e descrição
// $titulo = str_replace('#','-',$_POST['titulo']);
$variavel_titulo = $_POST['titulo'];
// $categoria = str_replace('#','-',$_POST['categoria']);
$variavel_categoria = $_POST['categoria'];
// $descricao = str_replace('#','-',$_POST['descricao']);
$variavel_descricao = $_POST['descricao'];

//separa as variaveis titulo, categoria e descricao usando '|'
$texto = $variavel_titulo.'|'.$variavel_categoria.'|'.$variavel_descricao.PHP_EOL;

echo $texto;

$arquivo = fopen('registro.txt', 'a');

fwrite($arquivo,$texto);

fclose($arquivo);

//apos confirmar o chamado ele volta para abrir_chamado.php e manda as informações para o registro
header ('location: abrir_chamado.php');


?>