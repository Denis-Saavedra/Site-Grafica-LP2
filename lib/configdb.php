<?php
    $servername = "localhost";
    $username = "root";
    $password = "senha";
    $database = "grafica";

    // Cria uma conexão
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }