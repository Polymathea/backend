<?php

namespace Polymathee\Models;

class Quiz {
    public $id;
    public $description;
    public $auteur;
    public $nbr_question;

    function __construct($id,$description,$auteur,$nbr_question){
        $this->id=$id;
        $this->description=$description;
        $this->auteur=$auteur;
        $this->nbr_question=$nbr_question;
    }
}  

?>