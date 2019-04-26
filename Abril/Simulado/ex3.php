<?php
    class opcoes{
        public $var;
        
        public function opcoes($var){
            
            $this->var = $var;
 
            switch ($var){
                case 1:
                    header("Location: page1.php");
                    break;
                 case 2:
                        header("Location: page2.php");
                        break;
                 case 3:
                        header("Location: page3.php");
                        break;
                 case 4:
                        header("Location: page4.php");
                        break;
                default:
                        header("Location: erro.php");
            }
        }
    }
    
    $var = $_POST["value"];
    $op = new opcoes($var);

?>