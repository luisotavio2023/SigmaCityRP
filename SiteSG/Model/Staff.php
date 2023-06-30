<?php

<<<<<<< HEAD
class Staff{

    protected $nome;
    protected $cargo;
    protected $id;




    public function get_Nome(){
        return($this->Nome);
    }

    public function set_Nome($Nome){
      $this->nome = $Nome;
    }

    public function get_Cargo(){
        return($this->cargo);
    }

    public function set_Cargo($Cargo){
      $this->cargo = $Cargo;
    }

    public function get_Id(){
        return($this->id);
    }

    public function set_Id($Id){
      $this->id = $Id;
    }


    public function __construct($Nome, $Cargo, $Id){

        $this->nome = $Nome;
        $this->cargo = $Cargo;
        $this->id = $Id;
    }

    public function StaffOn(){
        //Fazer função
    }

    public function Disponibilidade(){

    }
 
}

=======
Class staff{


    
}



>>>>>>> 7d3f11f3c732eb25ebf2329b411aaff63b839fb2
?>