<?php
namespace Polymathee\Attributes;

use \Attribute;

#[Attribute(Attribute::TARGET_FUNCTION | Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class Route
{   
    public function __construct(string $path, string $method = "GET")
    {
		$this->path = $path;
		$this->method = $method;
	}
}


?>
