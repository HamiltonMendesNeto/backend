<?php
// Modelo --> Entidade
class Aluno {

    // Atributos --> Características
    public $nome = "Hamilton";
    public $idade = 19;
    public $curso = "SENAI";

    // Método --> Ações
    function ExibirDadosAluno() {
        // Exibe os dados do aluno
        return "$this->nome com a idade $this->idade faz o curso $this->curso";

    }


    function alterarCurso($novoCurso) {
        // Altera o valor do curso
        $this->curso = $novoCurso;
    }
}




// Objeto --> Instância
echo "<hr>";
$y = new Aluno();
echo $y->ExibirDadosAluno();
echo "<hr>";
// Alterando o curso e exibindo novamente
$y->alterarCurso("SESI");
echo $y->ExibirDadosAluno();
echo "<hr>";

?>