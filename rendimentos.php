<?php

class rendimentos extends conta_poupanca{

    protected $juros;
    protected $rendimento;

    public function __construct($agencia, $conta, $saldo, $juros){
        parent::__construct($agencia, $conta, $saldo);
        $this->juros = $juros;
    }

    public function set_juros($juros){
        $this->juros = $juros;
    }

    public function get_juros(){
        return $this->juros;
    }

    public function get_rendimento(){
        return $this->rendimento;
    }


}

?>