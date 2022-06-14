<?php
namespace Polymathee\Controllers;

use Polymathee\Attributes\Route;
   
class TestController extends BaseController
{
	// Point d'accès par défaut, liste tout
	#[Route("/Polymathee/Test")]
	static function Test(){
		echo "Test !";
	}
	
	// Point d'accès sur la clé primaire
	#[Route("/Polymathee/Test/{id}")]
	static function Test2($id){
		echo "Test " . $id;
	}
	
	// Point d'accès sur une clé étrangère (matière)
	#[Route("/Polymathee/Test/Matiere/{matiere}")]
	static function Test3($matiere){
		echo "Test par matière " . $matiere;
	}
}
?>
