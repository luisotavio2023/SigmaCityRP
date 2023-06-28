<?php


    class Controlador{

    //Atributo
    private $bancoDeDados;

    function __construct(){
    $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }
}

?>