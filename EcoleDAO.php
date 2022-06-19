<?php

namespace Polymathee\Models;

class EcoleDAO{
    function getByid($id) {
        #return $Db::query("SELECT * FROM Quiz where id=:id", array('id'=>$id));
        return new Ecole($id, 'test', 'test', 'test','test');
    }
    
    function getAll(){
        return array(
            new Ecole(1, 'test', 'test', 'test','test'),
            new Ecole(2, 'test', 'test', 'test','test'),
            new Ecole(3, 'test', 'test', 'test','test')
            
        );
        
    }
}
?>

