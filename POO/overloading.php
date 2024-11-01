<?php
// Modelo --> Entidade

class Funcionario {

    // Atributos --> Características
    public $nome = null; 
    public $telefone = null;
    public $numFilhos = null; 
    public $cargo = null;
    public $salario = null;

    // Setters Overloading
    function __set($atributo, $valor) {
        $this->$atributo = $valor; 
    }
    
    // Getters
    function __get($atributo) {
        return $this->$atributo; 
    }

    function resumirCadFunc() {
        // Esse é um resumo de cadastro do funcionario
        return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)";
    }
}

$y = new Funcionario();
$y->__set('nome', 'Jose'); 
$y->__set('numFilhos', 2);
echo $y->resumirCadFunc();
?>
