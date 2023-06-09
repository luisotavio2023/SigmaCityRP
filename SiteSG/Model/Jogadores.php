<?php

include 'BancoDeDados.php';

class Jogadores{

    protected $Id;
    protected $FotoPerfil;
    protected $Nome;
    protected $Email; 
    protected $Senha; 
    protected $NickG; 
    protected $NickD; 
    protected $TagP; 


    public function __construct($id, $fotoperfil, $nome, $email, $senha, $nickg, $nickd, $tagp)
    {
        $this->Id = $id;
        $this->FotoPerfil = $fotoperfil; 
        $this->Nome = $nome;
        $this->Email = $email;
        $this->Senha = $senha;
        $this->NickG = $nickg;
        $this->NickD = $nickd;
        $this->TagP = $tagp;
    }

        //Get e set
    public function get_Id(){
        return($this->Id);
    }

    public function set_Id($id){
      $this->Id = $id;
    }

    public function get_fotoperfil(){
        return($this->FotoPerfil);
    }

    public function set_fotoperfil($fotoperfil){
      $this->FotoPerfil = $fotoperfil;
    }

    public function get_Nome(){
        return($this->Nome);
    }

    public function set_Nome($nome){
        $this->Nome = $nome;
    }

    public function get_Email(){
        return($this->Email);
    }

    public function set_Email($email){
        $this->Email = $email;
    }

    public function get_Senha(){
        return($this->Senha);
    }

    public function set_Senha($senha){
        $this->Senha = $senha;
    }

    public function get_NickG(){
        return($this->NickG);
    }

    public function set_NickG($nickg){
        $this->NickG = $nickg;
    }

    public function get_NickD(){
        return($this->NickD);
    }

    public function set_NickD($nickd){
        $this->NickD = $nickd;
    }

    public function get_TagP(){
        return($this->TagP);
    }

    public function set_TagP($tagp){
        $this->TagP = $tagp;
    }

}


?>