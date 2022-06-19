<?php

namespace Polymathee\Models;

class Classes {
    public $id;
    public $description;
    public $nom;
    public $users;
    public $ecole;

    function __construct($id,$description,$nom,$users,$ecole){
        $this->id=$id;
        $this->description=$description;
        $this->nom=$nom;
        $this->users=$users;
        $this->ecole=$ecole;
    }
}  

?>