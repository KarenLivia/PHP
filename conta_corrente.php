<?php

class conta_corrente extends conta_bancaria{
    protected $limite;

    public function __construct($agencia,$conta,$saldo,$limite){
        parent::__construct($agencia,$conta,$saldo);
        $this->limite = $limite;
    }

    public function retirar($quantia){
        if (($this->saldo + $this->limite) >= $quantia){
            $this->saldo -= $quantia; //retirada permitida
        }else{
            return false; //retirada não permitida
        }
        return true;
    }
}
?>