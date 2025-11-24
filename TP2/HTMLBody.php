<?php

    declare(strict_types=1);

    require_once __DIR__ . '/IObjetHTML.php';
    class HTMLBody{
    
        private array $items = [];
        public function __construct()
        {
        
        }
        
        public function Add(IObjetHTML $item)
        {
            $this->items[] = $item;
        }
        public function __toString() : string{
            $content = '';
            foreach ($this->items as $item) {
                $content .= "   " . (string)$item . "\n";
            }
            return "<body>\n {$content}</body>";
        }
    }

?>