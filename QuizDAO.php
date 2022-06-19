<?php

namespace Polymathee\Models;

class QuizDAO{
    function getByid($id) {
        #return $Db::query("SELECT * FROM Quiz where id=:id", array('id'=>$id));
        return new Quiz($id, 'test', 'test', 10);
    }
    
    function getAll(){
        return array(
            new Quiz(1, 'test', 'test', 10),
            new Quiz(2, 'test', 'test', 10),
            new Quiz(3, 'test', 'test', 10)
            
        );
        
    }
}
?>