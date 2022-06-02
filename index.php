<?php
function custom_autoloader($class) {
  require '../' . $class . '.php';
}
spl_autoload_register('custom_autoloader');

use Polymathee\Services\RoutingService;
use Polymathee\Controllers\TestController;

$routingService = new RoutingService();
$routingService->add("/Polymathee/","Polymathee\Controllers\TestController::Test");
$routingService->add("/Polymathee","Polymathee\Controllers\TestController::Test");
$routingService->add("/Polymathee/test/{id}","Polymathee\Controllers\TestController::Test2");
$routingService->run();
?>