<?php

class Condominio{

    //atributos
    private $proprietario;
    private $num_casa;
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;
    private $pais;

    //setters
    public function set_proprietario($proprietario){
        $this->proprietario=$proprietario;
    }

    public function set_num_casa($num_casa){
        $this->num_casa=$num_casa;
    }

    public function set_rua($rua){
        $this->rua=$rua;
    }

    public function set_bairro($bairro){
        $this->bairro=$bairro;
    }

    public function set_cidade($cidade){
        $this->cidade=$cidade;
    }
    
    public function set_estado($estado){
        $this->estado=$estado;
    }

    public function set_pais($pais){
        $this->pais=$pais;
    }

    //getters
    public function get_proprietario(){
        return $this->proprietario;
    }

    public function get_num_casa(){
        return $this->num_casa;
    }

    public function get_rua(){
        return $this->rua;
    }

    public function get_bairro(){
        return $this->bairro;
    }

    public function get_cidade(){
        return $this->cidade;
    }
    
    public function get_estado(){
        return $this->estado;
    }

    public function get_pais(){
        return $this->pais;
    }
}

?>