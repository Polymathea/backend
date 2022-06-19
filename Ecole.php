<?php

namespace Polymathee\Models;

class Ecole {
    public $id;
    public $nom;
    public $adresse;
    public $payeur;
    public $contrat;
            
    function __construct($id,$nom,$adresse,$payeur,$contrat){
        $this->id=$id;
        $this->nom=$nom;
        $this->adresse=$adresse;
        $this->payeur=$payeur;
        $this->contra=$contrat;
    }
}  

?>