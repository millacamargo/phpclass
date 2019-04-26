<?php
class Pagina{
    //Relacao Has-Many, um pagina para varias tags
    private $tags;
    
    public function Pagina(){
        $this->tags = array();
    }
    //O type hint em $tag indica que podemos usar o
    //Polimorfismo de subtipos
    public function inserirTag(Tag $tag){
        $this->tag[] = $tag;
    }
    
    public function listarConteudo(){
        foreach ($tags as $t) {
            //Acontece por causa da Herança
            echo $t->getInnerHTML();
            //instanceof, usado por causa da herança,
            //compara se $t eh instancia de Form para usar o
            //getType.
            if($t instanceof Form){
                echo $t->getType();
            }
        }
    }
}
?>