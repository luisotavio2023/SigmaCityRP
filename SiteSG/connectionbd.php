<?php
$servername = "localhost"; // Nome do servidor (localhost, se estiver rodando localmente)
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "SigmaCity"; // Nome do banco de dados

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch(PDOException $e) {
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
}
?>
