<?php
    declare(strict_types=1);

    require_once __DIR__ . '/IObjetHTML.php';
    class HTMLForm implements IObjetHTML
    {
        private string $action;
        private array $inputs;

        public function __construct(string $action)
        {
            $this->action = $action;
            $this->inputs = array();
        }

        public function __toString():string
        {
            $form = "<form action='{$this->action}' method='POST'>";
            foreach ($this->inputs as $input) 
            {
                $form .= $input->__toString() . "<br/>";
            }
            $form .= "</form>";
            return $form;

        }

        public function __toStringResultat():string 
        {
            $result = "<ul>";
                foreach ($this->inputs as $input) {
                $result .= "<li>" . $input->getName() . " : " . $input->getValue() . "</li>";
                }
            $result .= "</ul>";
            return $result;
            
        }

        public function add(HTMLInput $input)
        {
            $this->inputs[] =$input;
        }

        public function hydate(array $data)
        {
            foreach ($this->inputs as $input) {
                $input->setValue($data[$input->getName()]);
            }
        }


    }
?>