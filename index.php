<?php
function custom_autoloader($class) {
  require '../' . $class . '.php';
}
spl_autoload_register('custom_autoloader');

use Polymathee\Services\RoutingService;

$routingService = new RoutingService();
$routingService->run();
?>
