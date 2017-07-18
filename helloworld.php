<?php

class HelloWorld 
{
	protected $hello;
	protected $world;

	public function __toString()
	{
		return $this->hello . " " .$this->world . "!";
	}

	public function __set ($name, $value)
	{

		switch ($name) {

			case 'hello':
				$this->hello = $value;
				break;

			case 'world':
				$this->world = $value;
				break;

			default:
				echo $name . " Not found";
		}
	}
}

$hello_world = new HelloWorld();

$hello_world->hello = 'Hello';
$hello_world->world = 'World';

echo $hello_world;
