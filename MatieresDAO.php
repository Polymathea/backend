<?php

namespace Polymathee\Models;

class MatieresDAO{
    function getByid($id) {
        #return $Db::query("SELECT * FROM Quiz where id=:id", array('id'=>$id));
        return new Matieres($id, 'test', 'test', 'test');
    }
    
    function getAll(){
        return array(
            new Matieres(1, 'test', 'test','test'),
            new Matieres(2, 'test', 'test','test'),
            new Matieres(3, 'test', 'test','test')
            
        );
        
    }
}
?>