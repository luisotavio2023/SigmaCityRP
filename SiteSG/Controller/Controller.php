<?php


    class Controlador{

    //Atributo
    private $bancoDeDados;
    private $view;
    private $model;

    public function __construct($View, $Model) {
        $this->view = $View;
        $this->model = $Model;
        $this->bancoDeDados = new BancoDeDados("localhost","root","","sigmacity");
    }

    public function cadastrar() {
        // Ler os dados do arquivo 'registro.php'
        $dadosCadastro = include '../View/registro.php';

        // Chamar o método de inserção do Model (BancoDeDados)
        include '../Model/BancoDeDados.php'; // Inclui o arquivo que contém a classe BancoDeDados e a função de inserção
        inserirJogadores($dadosCadastro); // Chama a função diretamente, sem usar $this->model->

        // Exibir uma mensagem de sucesso na view
        $this->view->exibirMensagem("Cadastro realizado com sucesso!");
    }
}

?>