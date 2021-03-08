<?php

class conta_poupanca extends conta_bancaria{

    public function __construct($agencia,$conta,$saldo){
        parent::__construct($agencia,$conta,$saldo);
    }

    function retirar($quantia){
        if ($this->saldo >= $quantia){
            $this->saldo -= $quantia;
        }else{
            return false; //retirada não permitida
        }
        return true; //retirada permitida
    }
}
?>