<?php

class Planet {

//PROPERTIES
    private int $id;
    private string $nom;
    private string $type;
    private int $diametre;
    private float $gravite;
    private string $lien_nasa;


//GETTERS & SETTERS
    public function getId(): int { return $this->id; }
    public function setId(int $id): void { $this->id = $id;}

    //Nom avec méthode de validation
    public function getNom(): string { return $this->nom; }
    public function setNom(string $nom){ 
        if(self::validateNom($nom)){
            $this->nom = $nom;
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public static function validateNom(string $nom){
        if (strlen($nom) < 0 || strlen($nom) > 7 || !is_string($nom)){
            throw new Exception('Le champ Nom n\'est pas valide.');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    //Type avec méthode de validation
    public function getType(): string { return $this->type; }
    public function setType(string $type) { 
        if(self::validateType($type)){
            $this->type = $type;
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public static function validateType(string $type){
        if (strlen($type) < 0 || strlen($type) > 10 || !is_string($type)){
            throw new Exception('Le champ type n\'est pas valide.');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    //Diametre avec méthode de validation
    public function getDiametre(): int { return $this->diametre; }
    public function setDiametre(string $diametre) { 
        if(self::validateDiametre($diametre)){
            $this->diametre = (int)$diametre;
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public static function validateDiametre(string $diametre){
        if (!is_numeric($diametre)) {
            throw new Exception('Le champ Diametre n\'est pas valide.');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    
    //Gravite avec méthode de validation
    public function getGravite(): float { return $this->gravite; }
    public function setGravite(string $gravite){ 
        if(self::validateGravite($gravite)){
         $this->gravite = (float)$gravite;
         return TRUE;
        }else{
            return FALSE;
        }
    }
    public static function validateGravite(string $gravite){
        if (!is_numeric($gravite)) {
            throw new Exception('Le champ Gravite Point n\'est pas valide.');
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
    //Lien_nasa avec méthode de validation
    public function getLienNasa(): string { return $this->lien_nasa; }
    public function setLienNasa(string $lien_nasa){ 
        if(self::validateLienNasa($lien_nasa)){
            $this->lien_nasa = $lien_nasa;
            return TRUE;
        }else{
            return FALSE;
        }
    } 
    public static function validateLienNasa(string $lien_nasa){
        if (strlen($lien_nasa) < 0 || strlen($lien_nasa) > 180 || !is_string($lien_nasa)) {
            throw new Exception('Le champ lien_nasa n\'est pas valide.');
            return FALSE;
        }else{
            return TRUE;
        }
    }

   
   
//METHODS
    
    //pour créé un objet que l'on envoi à l'insertion (comme un constructeur)
    public function hydrate(){
       $this->setNom($_POST['nom']);
       $this->setType($_POST['type']);
       $this->setDiametre($_POST['diametre']);
       $this->setGravite($_POST['gravite']);
       $this->setLienNasa($_POST['lien_nasa']);
    }

}