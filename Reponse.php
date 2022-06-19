<?php

namespace Polymathee\Models;

class Reponse {
    public $id;
    public $question;
    public $contenu;
    public $validation;
    public $justification;

    function __construct($id,$question,$contenu,$validation,$justification){
        $this->id=$id;
        $this->question=$question;
        $this->contenu=$contenu;
        $this->validation=$validation;
        $this->justification=$justification;
    }
}  

?>
