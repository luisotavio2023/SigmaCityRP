<?php

require 'BancoDeDados.php';
class Organizacoes{

    protected $Nome;
    protected $Tipo;
    protected $Disponiblidade;
    protected $Dono;
    protected $Tag;


    public function __construct($nome, $tipo, $disp, $dono, $tag)
    {
        $this->Nome = $nome;
        $this->Tipo = $tipo;
        $this->Disponiblidade = $disp;
        $this->Dono = $dono;
        $this->Tag = $tag;
    }

        //Get e set
    public function get_nome(){
        return($this->Nome);
    }

    public function set_nome($nome){
      $this->Nome = $nome;
    }

    public function get_tipo(){
        return($this->Tipo);
    }

    public function set_tipo($tipo){
        $this->Tipo = $tipo;
    }

    public function get_disp(){
        return($this->Disponiblidade);
    }

    public function set_disp($disp){
        $this->Disponiblidade = $disp;
    }

    public function get_dono(){
        return($this->Dono);
    }

    public function set_dono($dono){
        $this->Dono = $dono;
    }

    public function get_Tag(){
        return($this->Tag);
    }

    public function set_Tag($tag){
        $this->Tag = $tag;
    }

}


?>