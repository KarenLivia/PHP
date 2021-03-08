<?php

class Automovel{
    private $marca;
    private $cor;
    private $preço;
    private $ano;
    private $modelo;
    private $chassi;

    //método construtor
    function __construct($marca, $cor, $preço, $ano, $modelo, $chassi) {
        $this->marca = $marca;
        $this->cor = $cor;
        $this->preço = $preço;
        $this->ano = $ano;
        $this->modelo = $modelo;
        $this->chassi = $chassi;
    }
    public function get_marca(){
        return $this->marca;}
    
    public function get_cor(){
        return $this->cor;} 

    public function get_preço(){
        return $this->preço;}

    public function get_ano(){
        return $this->ano;}
    
    public function get_modelo(){
        return $this->modelo;}
        
    public function get_chassi(){
        return $this->chassi;}
        
        //método destrutor
        function __destruct(){
            echo "Automóvel com o chassi nº {$this->chassi} finalizado...<br>\n";
        }

}