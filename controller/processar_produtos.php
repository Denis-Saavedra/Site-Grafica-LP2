<?php
    require_once("../lib/configdb.php");
    require_once("../model/Produto.php");

    // Consulta para selecionar todos os produtos da tabela
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);

    $produtos = []; // Crie um array vazio para armazenar objetos Produto

    // Verifique se há resultados da consulta
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Crie um objeto Produto para cada linha da consulta e adicione-o ao array
            $produto = new Produto(
                $row['id'],
                $row['nome'],
                $row['categoria'],
                $row['descricao'],
                $row['preco']
            );
            $produtos[] = $produto;
        }
    }

    // Feche a conexão com o banco de dados
    $conn->close();