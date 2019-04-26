<?php

class Tag{
    private $innerHTML;
    
    public function Tag($innerHTML){
        $this->innerHTML = $innerHTML;
    }
    
    public function getInnerHTML(){
        return $this->innerHTML;
    }
}

class P extends Tag{
    
}

class Span extends Tag{
    
}

class Div extends Tag{
    
}

class Form extends Tag{
    private $type;
    
    public function Form($innerHTML, $type){
        parent::Tag($innerHTML);
        $this->type = $type;
    }
    
    public function getType(){
        return $this->type;
    }
}
?>