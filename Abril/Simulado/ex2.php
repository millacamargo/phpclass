<?php

    abstract class Produto{
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
        
        public abstract function baixarPreco();
        
    }

    class Eletrodomesticos extends Produto {
        public function Eletrodomesticos($preco){
                parent::Produto($preco);
        }
        public function baixarPreco(){
            return 0.2;
        }
    }
    
    class Roupas extends Produto{
        public function Roupas($preco){
                parent::Produto($preco);
        }
        public function baixarPreco(){
            return 0.15;
        }
    }
    
    class Moveis extends Produto {
        public function Moveis($preco){
                parent::Produto($preco);
        }
        public function baixarPreco(){
            return 0.125;
        }
    }
    
    class Loja extends Produto{
        private $nome, $faturamento, $produtos;
        
        public function Loja($nome){
        $this->nome = $nome;
        $this->produtos = array();
    }
    
     public function registrarProdutos(produtos $produtos){
        $this->produtos[] = $produto;
    }
    
    public function listarProdutos(){
        foreach($this->produtos as $produtos){
            $produtos->mostrarInfo();
        }
    }
    
    public function listarFaturamento($nome, $faturamento){
        foreach($this->produtos as $produtos){
        $faturamento = $this->preco*(1+$this->imposto)*(1-baixarPreco())*$this->estoque;
        }
        $this->faturamento = $faturamento;
        return $this->faturamento;
    }
    }
?>
