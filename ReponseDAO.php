<?php

namespace Polymathee\Models;

class ReponseDAO{
    function getByid($id) {
        #return $Db::query("SELECT * FROM Quiz where id=:id", array('id'=>$id));
        return new Reponse($id, 'test', 'test', 'test','test');
    }
    
    function getAll(){
        return array(
            new Reponse(1, 'test', 'test', 'test','test'),
            new Reponse(2, 'test', 'test', 'test','test'),
            new Reponse(3, 'test', 'test', 'test','test')
            
        );
        
    }
}
?>