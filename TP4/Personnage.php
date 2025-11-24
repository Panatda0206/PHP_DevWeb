<?php
declare (strict_types=1);

class Personnage{

    //constantes
    const CEST_MOI = 1 ;  
    const PERSONNAGE_TUE = 2 ;  
    const PERSONNAGE_FRAPPE = 3 ;
    const PV_MAX = 100;  // point de vie maximum si la valeur de dégat dépasse 100 il est mort
    const DEGAT_MIN = 3; //Chaque coup qui lui sera porté lui fera prendre entre 3 
    const DEGAT_MAX = 10; // et 10 points de dégâts

    //attributs
    private int $id;
    private string $nom;
    private int $forcePerson;
    private int $degats;
    

    //getters et setters
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
    // constructeur
    public function __construct(string $nom, int $forcePerso)
    {
        $this->nom=$nom;
        $this->forcePerso=$forcePerso;
        $this->SetDegats(0);
    }

    //méthodes
    public function RecevoirDegat() : int
    {
        $coup = rand(self::DEGAT_MIN, self::DEGAT_MAX);
        $this->degat += $coup;
        if ($this->degat >= PV_MAX)
        {
            return self::PERSONNAGE_TUE;
        }
        else{
            return self::PERSONNAGE_FRAPPE;
        }
    }

    public function Frapper(Personnage $cible) : int{
        if ($cible == $this){
            return self::CEST_MOI;
        }else{
            return $cible ->RecevoirDegat($degat);
        }


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

    

}



?>