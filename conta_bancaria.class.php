<?php

include_once 'pessoa.class.php'; 

class conta_bancaria{
    private Pessoa $pessoa;
    private $banco;
    private $agencia;
    private $conta_corrente;
    private $conta_poupanca;
    private $senha;


    function __construct($pessoa,$banco,$agencia,$conta_corrente,$conta_poupanca,$senha){
        $this->pessoa=$pessoa;
        $this->banco=$banco;
        $this->agencia=$agencia;
        $this->conta_corrente=$conta_corrente;
        $this->conta_poupanca=$conta_poupanca;
        $this->senha=$senha;
    }
    
    public function get_pessoa(){
        return $this->pessoa;
    }
    public function get_banco(){
        return $this->banco;
    }
    public function get_agencia(){
        return $this->agencia;
    }
    public function get_conta_corrente(){
        return $this->conta_corrente;
    }
    public function get_conta_poupanca(){
        return $this->conta_poupanca;
    }
    public function get_senha(){
        return $this->senha;
    }
    /*
    function __destruct(){
        echo "Objeto {$this->$pessoa} finalizado...<br>\n";
    }*/

}



?>