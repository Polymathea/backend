<?php
namespace Polymathee\Services;

use Polymathee\Attributes\Route as Route;
use Polymathee\Controllers as Controllers;

class RoutingService
{
	private $routes;
	private $params;
	private $path;
	function __construct(){
		$this->routes = array();
	}
	
	public function add($path, $function, $method = 'GET'){
		$this->routes[] = array(
			'path' => $path,
			'function' => $function,
			'method' => strtoupper($method)
		);
	}
	
	public function read_controllers_attributes() {
		foreach(scandir("Controllers") as $file){
			$filename = explode('.',$file);
			if(count($filename)!=2 || $filename[1] != "php")
				continue; //Signifie qu'un fichier non php est présent parmi les controleurs, ne devrait pas se produire
			
			$class = "Polymathee\\Controllers\\".$filename[0];
			$reflectionClass = new \ReflectionClass($class);
			$methods = $reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC);
			
			foreach ($methods as $method) {
				$reflectionMethod = new \ReflectionMethod($class, $method->getName());

				$attributes = $reflectionMethod->getAttributes(Route::class);

				foreach ($attributes as $attribute) {
					$a = $attribute->newInstance();
					$this->add($a->path, $class.'::'.$method->getName(), $a->method);
				}
			}
		}
	}
	
	public function run(){
		$this->read_controllers_attributes();
		
		$parsed_url = parse_url($_SERVER['REQUEST_URI']);
		$this->path = explode('/',$parsed_url['path']??'');
		$size = count($this->path);
		$method = strtoupper($_SERVER['REQUEST_METHOD']);

		$path_match_found = false;
		$route_match_found = false;
		$this->params = array();

		foreach($this->routes as $route){
			if($this->check_path_matching(explode('/',$route['path']), $size)){
				$path_match_found = true;
				if($method == $route['method']){
					$route_match_found = true;
					break;
				}
			}
			// Réinitialise les paramètres de la route testé, puisqu'elle ne correspond pas.
			$this->params = array();
		}
		
		if($route_match_found){
			call_user_func_array($route['function'], $this->params);
		}
		else if($path_match_found){
			http_response_code(405);
		}
		else{
			http_response_code(404);
		}
	}
	
	private function check_path_matching($route){
		$size = count($this->path);
		if(count($route) != $size)
			return false;
		
		for($i = 0; $i<$size; $i++){
			$len = strlen($route[$i]);
			if(substr($route[$i],0,1) === "{" && substr($route[$i],$len-1,1) === "}"){
				$this->params[substr($route[$i],1,$len-2)] = $this->path[$i];
			}
			else if($route[$i] != $this->path[$i]){
				return false;
			}
		}
		return true;
	}
}
?>