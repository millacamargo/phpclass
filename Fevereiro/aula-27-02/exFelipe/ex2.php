<form action="" method="post">
    Numero de 0 a 99
    <input type="text" name="value"/>
    <input type="submit" value="Adivinhe"/>
</form>

<?php
class jogo{
   public function num(){
      $this->aleatorio = rand(0,99);
   }
    public function sorteio(){
    if($_POST['value']){
    $this->value = $_POST['value'];
    $this->atual = $this->aleatorio;
    if ($this->value == $this->atual){
        echo "Parabens, vc acertou";
    }else{
        echo "Burro, vc errou";
    } 
}
}
}
    $test = new jogo();
    $test->num();
    $test->sorteio();
?>