<?php

class Authenticator {
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function authenticate($username, $password) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // Informações corretas, redirecionar para a página index.php
                header("Location: index.php");
                exit;
            } else {
                // Informações incorretas, exibir mensagem de erro
                echo '<div class="alert alert-danger" role="alert">Usuário ou senha inválidos.</div>';
            }
        } catch(PDOException $e) {
            echo '<div class="alert alert-danger" role="alert">Erro ao autenticar usuário: ' . $e->getMessage() . '</div>';
        }
    }
}

// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SigmaCity";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Dados do formulário
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Criação da instância da classe Authenticator
        $authenticator = new Authenticator($conn);

        // Autentica as informações
        $authenticator->authenticate($username, $password);
    }
} catch(PDOException $e) {
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
}

?>