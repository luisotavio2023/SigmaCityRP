<?php

require_once '../Controller/Controller.php';
class BancoDeDados{

    private $host = "localhost";
    private $login = "root";
    private $senha = "";
    private $dataBase = "sigmacity";

    public function __construct($Host, $Login, $Senha, $DataBase){
        $this->host = $Host;
        $this->login = $Login;
        $this->senha = $Senha;
        $this->dataBase = $DataBase;
    }

    //Métodos
    public function conectarBD(){

        $conexao = mysqli_connect($this->host,$this->login,$this->senha,$this->dataBase);
        return($conexao);
      }

      public function inserirJogadores($Id, $fotodisc, $nome, $email, $senha, $nickg, $nickd, $tagp){
        
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO Jogadores (Id, fotodisc, nome, email, senha, nickgame, nickdisc, tag) 
                     VALUES ('$Id','$fotodisc','$nome', '$email', '$senha','$nickg','$nickd','$tagp')";
        mysqli_query($conexao,$consulta);
    }

    public function inserirOrg($nome, $tipo, $disp, $dono, $valor){
        
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO Organizacoes (Nome, Tipo, Disponiblidade, Dono, Valor) 
                     VALUES ('$nome','$tipo','$disp','$dono','$valor')";
        mysqli_query($conexao,$consulta);
    }

    public function InseriorJogador($Id, $FotoPerfil, $nome, $email, $senha, $nickg, $nickd, $tagp){
        
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO jogadores (Id, fotodisc, nome, email, senha,  nickgame, nickdisc, tag) 
                     VALUES ('$Id','$FotoPerfil','$nome','$email','$senha', '$nickg', '$nickd', '$tagp')";
        mysqli_query($conexao,$consulta);
    }

}