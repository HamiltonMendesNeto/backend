<?php

// Modelo --> Entidade
class Funcionario {

    // Atributos --> Características
    public $nome = "Hamilton"; 
    public $telefone = null;
    public $numFilhos = 4; 

    // Método --> Ações
    function resumirCadFunc() {
        // Esse é o resumo do cadastro do funcionário
        return "$this->nome possui $this->numFilhos Filhos(s)"; 
    }

    function modificarNumFilhos($filhos) { 
        // Afeta um atributo do objeto
        $this->numFilhos = $filhos; 
    }

    function modificarNome($alterarNome) { 
        $this->nome = $alterarNome; 
    }
}

// Objeto --> Identidade
$y = new Funcionario();
echo $y->resumirCadFunc();
echo "<hr>";
$y->modificarNumFilhos(3); 
echo $y->resumirCadFunc();
echo "<hr>";

$x = new Funcionario();
$x->modificarNome('Carlos'); 
echo $x->resumirCadFunc(); 
echo "<hr>";

?>
