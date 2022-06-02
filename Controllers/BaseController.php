<?php
namespace Polymathee\Controllers;
   
class BaseController
{
	static function Test(){
		echo "Test !";
	}
	static function Test2($id){
		echo $id;
	}
}
?>