<?php
    require_once("../lib/configdb.php");
    require_once("../model/Usuario.php");

    // Obtém os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta o banco de dados para verificar a autenticação
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Autenticação bem-sucedida, redireciona para a página de perfil ou outra página
        session_start();
        $row = $result->fetch_assoc();
        $user = new Usuario($row['id'], $row['nome'], $row['email'], $row['senha']);
        $_SESSION['login'] = true;
        $_SESSION['id'] = $user->getId();
        $_SESSION['nome'] = $user->getNome();
        $_SESSION['email'] = $user->getEmail();
        
        header("Location: ../view/perfil.php");
    } else {
        header("Location: ../view/perfil.php?erro=incorreto");
    }

    // Fecha a conexão com o banco de dados
    $conn->close();