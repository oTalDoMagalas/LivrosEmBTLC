<?php
// Ponto de entrada do sistema

require_once 'livro.php';

$controller = new LivroController();
$controller->listar(); // Executa a listagem
?>
