<?php
    declare(strict_types=1);

    require_once __DIR__ . '/IObjetHTML.php';
    class HTMLInput implements IObjetHTML
    {
        private string $name;
        private string $type;
        private string $label;
        private string $value;

        public function __construct(string $label, string $name, string $type, string $value)
        {
            $this->name = $name;
            $this->type = $type;
            $this->setValue($value);
            $this->label = $label;
        }

        public function __toString():string{
             return "<label for='{$this->name}'>{$this->label}</label>" .
               "<input type='{$this->type}' name='{$this->name}' value='{$this->value}' />";

        }
        public function setValue(string $value){
            $this->value = htmlspecialchars($value);
        }

        public function getName():string{
            return $this->name;
        }

        public function getValue():string{
            return $this->value;
        }



    }

?>