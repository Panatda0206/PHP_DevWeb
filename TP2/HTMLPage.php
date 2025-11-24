<?php
    declare(strict_types=1);
    require_once __DIR__ . '/HTMLHead.php';
    require_once __DIR__ . '/HTMLBody.php';

    class HTMLPage{
        
        private HTMLHead $head;
        private HTMLBody $body;
        
        public function __construct(HTMLHead $head, HTMLBody $body){
            $this->head = $head;
            $this->body = $body;
        
        }
        public function __toString():string{
            return "<html>\n" .
                    (string)$this->head ."\n" .
                    (string)$this->body . "\n".
                    "</html>";
        } 
    }


?>