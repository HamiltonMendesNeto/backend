<?php
// Modelo --> Entidade
class Funcionario {

    // Atributos --> Características
    public $nome = null; 
    public $telefone = null;
    public $numFilhos = null; 

    // Setters
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos; 
    }

    // Getters
    function getNome() { 
        return $this->nome;
    }

    function getNumFilhos() {
        return $this->numFilhos;
    }

    function resumirCadFunc() {
        // Esse é um resumo de cadastro do funcionario
        return "$this->nome possui $this->numFilhos filho(s)";
    }
}

$y = new Funcionario();
$y->setNome('Jose'); 
$y->setNumFilhos(2);
echo $y->getNome(). ' possui '.$y->getNumFilhos(). " filho(s)";
