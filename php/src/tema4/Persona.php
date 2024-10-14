<?php
class Persona{
    private const LIMITE_EDAT = 66;
    public function __construct(
        private string $nom,
        private string $cognoms,
        private int $edad = 25
    ){}
    
    public function getNom(){
        return $this->nom;
    }

    public function getCognoms(){
        return $this->cognoms;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setCognoms($cognoms){
        $this->cognoms = $cognoms;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getNomComplet(){
        return $this->nom . ' ' . $this->cognoms;
    }

    public function estaJubilat(){
        return $this->edad >= self::LIMITE_EDAT;
    }
}
?>