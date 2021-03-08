<?php

    class automovel{
        private $marca;
        private $cor;
        private $modelo;
        private $preco;

        public function get_marca(){
            return $this->marca;
        }

        public function get_cor(){
            return $this->cor;
        }
        public function get_modelo(){
            return $this->modelo;
        }
        public function get_preco(){
            return $this->preco;
        }

        public function set_marca($marca){
            $this->marca = $marca;
        }

        public function set_cor($cor){
            $this->cor = $cor;
        }

        public function set_modelo($modelo){
            $this->modelo = $modelo;
        }

        public function set_preco($preco){
            $this->preco = $preco;
        }
    }
?>