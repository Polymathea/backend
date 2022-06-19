<?php

namespace Polymathee\Models;

class AdressesDAO{
    function getByid($id) {
        #return $Db::query("SELECT * FROM Quiz where id=:id", array('id'=>$id));
        return new Adresses($id, 'test', 'test', 10,'test','test');
    }
    
    function getAll(){
        return array(
            new Adresses(1, 'test', 'test', 10,'test','test'),
            new Adresses(2, 'test', 'test', 10,'test','test'),
            new Adresses(3, 'test', 'test', 10,'test','test')
            
        );
        
    }
}
?>