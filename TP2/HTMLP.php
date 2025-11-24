<?php
    declare(strict_types=1);

    require_once __DIR__ . '/IObjetHTML.php';
    require_once __DIR__ . '/HTMLString.php';
                                       
    class HTMLP implements IObjetHTML{
    
        private string $text;
        //Bonus 1
        private HTMLString $element;
        
        public function __construct(string $text){
            $this->text = $text;
        }
        
        public function __toString():string{
            return "<p> {$this->text} </p>";
        }
    
    }

?>