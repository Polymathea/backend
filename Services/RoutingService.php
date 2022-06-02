<?php
namespace Polymathee\Services;

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
	
	public function run(){
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
			echo implode ('/', $this->path);
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