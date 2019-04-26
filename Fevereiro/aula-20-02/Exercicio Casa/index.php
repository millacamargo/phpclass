Um Revolver pode atirar se possuir pelo menos
uma munição (o tiro ocorre em um echo apenas).
Este pode também recarregar uma munição por vez,
desde que não ultrapasse a quantidade máxima 
de munição. 

a) Quem é a classe? Revolver
b) Quais são os atributos? municao
c) Quais são os métodos? recarga
d) Programe-os.
e) Crie um método para mostrar o estado atual do
revolver.

<?php
    class Revolver
    {
        public $municao, $pente;
        public function tiro()
        {
            if ($this->municao > 0)
            {
                $this->municao = $this->municao - 1;
                echo "<p>BANG!</p>";
            }
        }
        
        public function recarregar()
        {
            if ($this->municao < $this->pente)
            {
                $this->municao = $this->municao + 1;
                echo "<p>TICK!</p>";
            }
        }
        
         public function statusArma()
         {
             echo "<p>$this->municao</p>";
             if ($this->municao <= 0)
             {
                 echo "<p>Sua arma esta descarregada</p>";
             } 
             else if ($this->municao >= $this->pente)
             {
                echo "<p>Sua arma esta carregada</p>";
            }
         }
    }
    
    $gloc = new Revolver();
    $gloc->pente = 6;
    $gloc->municao = 0;
    $gloc->tiro();
    $gloc->statusArma();
    $gloc->recarregar();
    $gloc->statusArma();
    $gloc->recarregar();
    $gloc->statusArma();
    $gloc->recarregar();
    $gloc->statusArma();
    $gloc->recarregar();
    $gloc->statusArma();
    $gloc->recarregar();
    $gloc->statusArma();
    $gloc->recarregar();
    $gloc->statusArma();
    $gloc->recarregar();
    $gloc->statusArma();
    $gloc->tiro();
    $gloc->statusArma();
    $gloc->tiro();
    $gloc->statusArma();
    $gloc->tiro();
    $gloc->statusArma();
    $gloc->tiro();
    $gloc->statusArma();
    $gloc->tiro();
    $gloc->statusArma();
    $gloc->tiro();
    $gloc->statusArma();
    $gloc->tiro();
    $gloc->statusArma();
?>
