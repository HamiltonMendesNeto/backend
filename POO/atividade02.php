<?php

class Livro {
    // Atributos --> Características
    public $titulo = "Os 3 Porquinhos";
    public $autor = "Hamilton";
    public $publicacao = "10/02/1800";

    // Método --> Ações
    public function exibirDetalhes() {
        // Exibe os dados do livro
        return "{$this->titulo} do autor {$this->autor}, publicado em {$this->publicacao}.";
    }

    public function alterarDatPublicacao($novaPublicacao) {
        // Altera a data da publicação
        $this->publicacao = $novaPublicacao;
    }
}

// Objeto --> Instância
echo "<hr>";
$y = new Livro();
echo $y->exibirDetalhes();
echo "<hr>";

// Alterando a data de publicação e exibindo novamente
$y->alterarDatPublicacao("20/05/2022");
echo $y->exibirDetalhes();
echo "<hr>";

?>