<?php

//cria uma array multidimencional
$usuario = [
    ["id" => 1,
    "nome" => "Hamilton",
    "cidade" => "Cerquilho",
    "estado" => "SP"],
    [
    "id" => 2,
    "nome" => "Guilherme",
    "cidade" => "Tatui",
    "estado" => "SP"],
    [
        "id" => 3,
        "nome" => "Felipe",
        "cidade" => "Sorocaba",
        "estado" => "SP"],
    [
        "id" => 4,
        "nome" => "Thor",
        "cidade" => "Sorocaba",
        "estado" => "SP"],
    [
        "id" => 5,
        "nome" => "Adão",
        "cidade" => "Eden",
        "estado" => "P"], 

    ];
    // cria uma variavel busca
    $busca = "Thor";

    //printa o usuario
    echo '<pre>';
    print_r($usuario);
    echo '<pre>';

    //verifica se o nome está na lista
    $indice = array_search($busca, array_column($usuario, 'nome'));
    if ($indice !== false) {
        echo"$busca foi encontrado com o ID:".$usuario[$indice]["id"];
    }
    else{

        echo "$busca não foi encontrado na lista de ususarios";
    }



        
        



?>