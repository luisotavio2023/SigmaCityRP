<?php

class JogadoresController {
    public function cadastrar() {
        // Verifica se o formulário foi submetido
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtenha os dados do formulário
            $email = $_POST['inputEmail'];
            $senha = $_POST['inputPassword'];
            $id = $_POST['inputId'];
            $nickdisc = $_POST['inputdisc'];
            $nickg = $_POST['inputNickg'];
            $tagp = $_POST['inputTagG'];
            $nome = $_POST['inputNome'];
            $fotoperfil = $_POST['InputFoto'];

            // Chame o método do modelo para cadastrar o jogador
            $jogadorModel = new JogadorModel();
            $jogadorModel->inserirJogador($email, $senha, $id, $nickdisc, $nickg, $tagp, $nome, $fotoperfil);

            // Redirecione para a página de login
            header('Location:../view/login.php');
            exit();
        }
    }
}
