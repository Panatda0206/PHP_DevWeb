<?php
    declare(strict_types=1);

    require_once __DIR__ . '/IObjetHTML.php';

    class HTMLString implements IObjetHTML
    {
        private string $text;
        
        public function __construct(string $text){
            $this->text = $text;
        }
        
        public function __toString():string{
            return $this->text;
        }
    
    }
?>