<?php

class Jogadores{

    protected $Id;
    protected $Nome;
    protected $NickG;
    protected $NickD;
    protected $TagP;


    public function __construct($id, $nome, $nickg, $nickd, $tagp)
    {
        $this->Id = $id;
        $this->Nome = $nome;
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

    public function get_Nome(){
        return($this->Nome);
    }

    public function set_Nome($nome){
        $this->Nome = $nome;
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