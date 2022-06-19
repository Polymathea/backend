<?php

namespace Polymathee\Models;

class ClassesDAO{
    function getByid($id) {
        #return $Db::query("SELECT * FROM Quiz where id=:id", array('id'=>$id));
        return new Classes($id, 'test', 'test', 'test','test');
    }
    
    function getAll(){
        return array(
            new Classes(1, 'test', 'test', 'test','test'),
            new Classes(2, 'test', 'test', 'test','test'),
            new Classes(3, 'test', 'test', 'test','test')
            
        );
        
    }
}
?>