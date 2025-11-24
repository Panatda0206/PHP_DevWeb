<?php
class PersonnageManager{
    private PDO $_db;

    public function __construct()
    {
        $this->_db = new PDO ('mysql:host=localhost;dbname=grp-126_s3_progweb','grp-126','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
    }

   public function setDb(PDO $db):void{
        $this->_db = $db;
    }

    public function enregistrer(Personnage $perso) : void{
        $q = $this->_db->prepare('INSERT INTO personnage SET nom = :nom, forcePerso = :forcePerso, degats = :degats');
        $q->bindValue(':nom', $perso->nom());
        $q->bindValue(':forcePerso', $perso->forcePerso(), PDO::PARAM_INT);
        $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
        $q->execute();
    }

    public function selectionner(string $perso) : ?Personnage{
        $q = $this->_db->prepare('SELECT id, nom, forcePerso, degats FROM personnage WHERE id = :id');
        $q->bindValue(':id', $perso->id());
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Personnage($donnees);
    }

    public function supprimer(Personnage $perso) {
        $q = $this->db->prepare('DELETE FROM Personnage WHERE id = :id');
        $q->bindValue(':id', $perso->id());
        $q->execute();
    }
    public function modifier(Personnage $perso)
    {
        
    }

    public function compterPersonnage() : int
    {

    }

    public function RecupererListPersonnage() : Personnage[]
    {

    }

}
?>