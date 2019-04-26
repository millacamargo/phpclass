<?php

    class Produto{
        public $preco;
        public $qtdEstoque;
        private $imposto;
        
        public function Produto($preco,$qtdEstoque){
            $this->preco = $preco;
            $this->estoque = $qtdEstoque;
        }
        
        public function getEstoque(){
            if ($this->estoque<=0){
                echo "Produto não disponível";
            }else{
                return $this->estoque;
            }
        }
        
         public function getPreco(){
             return $this->preco;
        }
        
        public function subirPreco(){
            return $this->preco()*(1+$this->imposto);
        }
    }

    class Eletrodomesticos extends Produto {
        public function Eletrodomesticos($preco){
                parent::Produto($preco);
        }
        public function baixarPreco(){
            return $this->preco()*(1-0.2);
        }
    }
    
    class Roupas extends Produto{
        public function Roupas($preco){
                parent::Produto($preco);
        }
        public function baixarPreco(){
            return $this->preco()*(1-0.15);
        }
    }
    
    class Moveis extends Produto {
        public function Moveis($preco){
                parent::Produto($preco);
        }
        public function baixarPreco(){
            return $this->preco()*(1-0.125);
        }
    }
?>
