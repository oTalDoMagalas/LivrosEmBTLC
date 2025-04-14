<?php
// Ponto de entrada do sistema

require_once 'adm.php';

$controller = new LivroController();
$controller->listar(); // Executa a listagem
?>
