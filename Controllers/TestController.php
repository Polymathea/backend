<?php
namespace Polymathee\Controllers;

use Polymathee\Attributes\Route;
   
class TestController extends BaseController
{
	#[Route("/Polymathee/Test")]
	static function Test(){
		echo "Test !";
	}
	
	#[Route("/Polymathee/Test/{id}")]
	static function Test2($id){
		echo "Test " . $id;
	}
}
?>