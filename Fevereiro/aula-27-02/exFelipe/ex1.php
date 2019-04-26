<?php
    class Eq2{
    public $x1, $x2, $a, $b, $c;
    
    public function delta(){
    $this->delta = ($this->b * $this->b) - ((4 * $this->a) * $this->c);
    }
    
    public function raiz1(){
    $this->x1 = (-$this->b + sqrt($this->delta)) / (2 * $this->a);
        if ($this->x1 != "NaN"){
    echo "$this->x1"; 
            } else{
    echo "Delta negativo";
        }
    }
        
    public function raiz2(){
    $this->x2 = (-$this->sb - sqrt($this->delta)) / (2 * $this->a);
        if ($this->x2 != "NaN"){
    echo "$this->x2"; 
            } else{
    echo "Delta negativo";
        }
    }
}

    $test = new Eq2();
    $test->a = 1;
    $test->b = -5;
    $test->c = 6;
    $test->delta();
    $test->raiz1();
    $test->raiz2();
?>