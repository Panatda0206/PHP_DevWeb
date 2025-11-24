<?php
declare(strict_types=1);

class Personnage{
    private int $id;
    private string $nom;
    private int $forcePerso;
    private int $degats;

    // propriétés
    public function Id() : int {
        return $this->id;
    }

    public function SetId(int $id) : int {
        if($id > 0 ){ 
            $this->id = $id;
        }
        

    }

    
    public function Nom() : string {
        return $this->nom;
    }

    public function SetNom(int $nom) : string {
        $this->nom = $nom;

    }

    
    public function ForcePerso() : int {
        return $this->forcePerso;
    }

    public function SetForcePerso(int $forcePerso) : int {
        $this->forcePerso = $forcePerso;

    }


    public function Degats() : int {
        return $this->degats;
    }

    public function SetDegats(int $degats) : int {
        $this->degats = $degats;

    }

    public function __construct(string $nom, int $forcePerso, int $degats)
    {
        $this->nom=$nom;
        $this->forcePerso=$forcePerso;
        $this->degats=$degats;
    }

    public function hydrate(array $donnes){
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function __toString() : string{
        return 'Personnage # --' .$this->id.',  Nom = ' .$this->nom.', Force = '.$this->forcePerso. ', Degats = ' .$this->degats. ')';
    }
}
?>