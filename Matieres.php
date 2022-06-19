<?php

namespace Polymathee\Models;

class Matieres {
    public $id;
    public $description;
    public $nom;
    

    function __construct($id,$description,$nom){
        $this->id=$id;
        $this->description=$description;
        $this->nom=$nom;
        
    }
}  

?>