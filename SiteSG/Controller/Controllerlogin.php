<?php
// Configurações do banco de dados
$servername = "localhost"; // Nome do servidor
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "sigmacity"; // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificando o email e senha enviados via POST
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar se o email e senha existem no banco de dados
    $sql = "SELECT * FROM jogadores WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    // Verifica se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        // Redireciona para a página Principal.php
        header("Location: View/Principal.php");
        header("Content-Type: text/html"); // Define o tipo de conteúdo como HTML
        exit(); // Encerra o script após o redirecionamento
    } else {
        echo "Email ou senha inválidos.";
    }
}

// Fechando a conexão
$conn->close();
?>