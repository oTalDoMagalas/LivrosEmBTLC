<?php
// Controller - Faz a ponte entre Model e View

require_once 'Livro.php';
require_once 'livrosView.php';

class LivroController
{
    private $model;

    public function __construct() {
        $this->model = new Livro(); // Instancia o model Livro
    }

    public function listar() {
        $livros = $this->model->listarLivros(); // Busca os livros
        exibirLivros($livros); // Envia para a view exibir
    }
}
?>
