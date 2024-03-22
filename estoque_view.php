<?php

require_once 'EstoqueController.php';

$pdo = new PDO("sqlite:estoque.db");
$estoqueModel = new Estoque($pdo);
$estoqueController = new EstoqueController($estoqueModel);

$estoques = $estoqueController->listarEstoques();

foreach ($estoques as $estoque) {
    echo "ID: " . $estoque['id'] . "<br>";
    echo "Nome: " . $estoque['nome'] . "<br>";
    echo "Categoria: " . $estoque['categoria'] . "<br>";
    echo "Quantidade: " . $estoque['quantidade'] . "<br>";
    echo "<hr>";
}

?>