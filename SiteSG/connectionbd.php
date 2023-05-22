<?php

class DatabaseConnection {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            <?php 
            <div class="alert alert-success" role="alert">
                Conexão com o banco de dados estabelecida com sucesso!
            </div>
             ?>
        } catch(PDOException $e) {
            <?php
            <div class="alert alert-danger" role="alert">
                Falha na conexão com o banco de dados: <?php echo $e->getMessage(); ?>
            </div>
            ?>
        }
    }
    
}

// Uso da classe
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SigmaCity";

$databaseConnection = new DatabaseConnection($servername, $username, $password, $dbname);
$databaseConnection->connect();

?>
