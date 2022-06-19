<?php

namespace Polymathee\Models;

class Adresse {
    public $id;
    public $rue;
    public $complement;
    public $code_postal;
    public $ville;
    public $pays;

    function __construct($id,$rue,$complement,$code_postal,$ville,$pays){
        $this->id=$id;
        $this->rue=$rue;
        $this->complement=$complement;
        $this->code_postal=$code_postal;
        $this->ville=$ville;
        $this->pays=$pays;
    }
}  

?>