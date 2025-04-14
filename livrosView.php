<?php
// View - Responsável por exibir os livros em HTML

function exibirLivros($livros) {
    echo "<h2>Lista de Livros:</h2><ul>";

    foreach ($livros as $livro) {
        echo "<li>Título: {$livro['titulo']} | Autor: {$livro['autor']} | Ano: {$livro['ano']}</li>";
    }

    echo "</ul>";
}
?>
