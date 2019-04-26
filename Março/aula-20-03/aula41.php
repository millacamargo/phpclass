<?php

class Produto{
    private $preco, $qtEstoque, $qtVendido;
    
    public function Produto($preco, $qtEstoque){
        $this->qtVendido = 0;
        $this->preco = max(1,$preco);
        $this->qtEstoque = max(0,$qtEstoque);
    }
    
    public function aumentarPreco($pct){
        $pct = max(0,$pct);
        $this->preco = (1+$pct/100)*$this->preco;
    }
    
    public function diminuirPreco($pct){
        $pct = max(0,$pct);
        $this->preco = (1-$pct/100)*$this->preco;
    }
    
    public function vender($quantidade){
        $quantidade = max(0,$quantidade);
        if($quantidade <= $this->qtEstoque){
            $this->qtEstoque = $this->qtEstoque - $quantidade;
            $this->qtVendido = $this->qtVendido + $quantidade;
        }
    }
    
    public function calcularFaturamento(){
        return $this->qtVendido*$this->preco;
    }
}

$p1 = new Produto(10,200);
$p1->aumentarPreco(10);
$p1->vender(150);
$faturamento = $p1->calcularFaturamento();
echo "<h1> $faturamento </h1>";

?>