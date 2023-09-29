<?php
require_once("../lib/configdb.php");

// Obtém os dados do formulário
$nome = $_POST['nome']." ".$_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verifica se o email já existe no banco de dados
$verificaEmail = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($verificaEmail);

if ($result->num_rows > 0) {
    // O email já existe, você pode lidar com isso de acordo com suas necessidades
    header("Location: ../view/register.php?erro=email&nome=".$_POST['nome']."&sobrenome=".$_POST['sobrenome']."&email=".$email);
}

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";


$targetDir = "../assets/img/users/";
$sql_img = "SELECT MAX(id) + 1 as id FROM usuarios;";
$result_img = $conn->query($sql_img);
if ($result_img->num_rows > 0) {
    $row = $result_img->fetch_assoc();
    if ($row['id'] == NULL) {
        $id_img = 1;
    } else {
    $id_img = $row['id'];
    }
}
$targetFile = $targetDir . $id_img . ".jpg";

// Move o arquivo para o diretório de destino
move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile);

if ($conn->query($sql) === TRUE) {
    header("Location: ../view/login.php?register=true");
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
