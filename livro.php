<?php
// Model - Responsável por armazenar e fornecer os dados dos livros

class Livro
{
    // Propriedade privada com os dados dos livros
    private $livros = [
        ["titulo" => "Dom Casmurro", "autor" => "Machado de Assis", "ano" => 1899],
        ["titulo" => "O Pequeno Príncipe", "autor" => "Antoine de Saint-Exupéry", "ano" => 1943],
        ["titulo" => "Capitães da Areia", "autor" => "Jorge Amado", "ano" => 1937],
        ["titulo" => "A Hora da Estrela", "autor" => "Clarice Lispector", "ano" => 1977],
        ["titulo" => "1984", "autor" => "George Orwell", "ano" => 1949],
    ];

    // Método público que retorna os livros
    public function listarLivros() {
        return $this->livros;
    }
}
?>