<?php

declare(strict_types=1);
class HighScore{
    private array $tab;

    public function __construct(){
        $this->tab = array();
    }

    public function add_value($value){
        $this->tab[] = $value;
        rsort($this->tab);
        $this->tab = array_slice($this->tab, 0, 10);
    }

    public function __toString() : string{
        $s="[";
        foreach($this->tab as $val){
            $s .= $val." ";
        }
        $s .= "]";
        return $s;
    }

    public function StoreInCookie() {
        setcookie("highscore",json_encode($this->tab));
    }

    public function LoadFromCookie(){
        if(isset($_COOKIE['highscore'])){
            $this->tab = json_decode($_COOKIE['highscore'], true);
        }
    }
}
?>


