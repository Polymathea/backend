<?php

namespace Polymathee\Models;

class RolesDAO{
    function getByid($id) {
        #return $Db::query("SELECT * FROM Quiz where id=:id", array('id'=>$id));
        return new Roles($id,'nom');
    }
    
    function getAll(){
        return array(
            new Roles(1, 'test'),
            new Roles(2, 'test'),
            new Roles(3, 'test')
            
        );
        
    }
}
?>