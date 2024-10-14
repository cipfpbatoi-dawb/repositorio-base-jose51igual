<?php

include_once("Persona.php");

class Empleado extends Persona{
    
    public function __construct(
        string $nom,
        string $cognoms,
        private float $sou,
        private array $telefons,
        int $edad = 25
    ){
        parent::__construct($nom,$cognoms,$edad);
    }

    public function anyadirTelefono(int $telefon){
        $this->telefons[] = $telefon;
    }

    public function listarTelefonos(){
        foreach($this->telefons as $tel){
            echo '<li>' . $tel . ', </li>';
        }
    }

    public function vaciarTelefonos(){
        array_splice($this->telefons, 0);
    }

    public function debePagarImpuestos(){
        return $this->sou > 3333;
    }

    public static function toHtml(Empleado $emp){
        echo "<p>" . $emp->getNomComplet() . "</p>";
        echo "<ol>";
        $emp->listarTelefonos();
        echo "</ol>";
    }
}