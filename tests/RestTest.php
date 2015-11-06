<?php
use DenDev\Plprest\Rest;

class RestTest extends PHPUnit_Framework_TestCase 
{
	public function test_instanciate()
	{
		$object = new Rest();
		$this->assertInstanceOf( "DenDev\Plprest\Rest", $object );
	}
}

