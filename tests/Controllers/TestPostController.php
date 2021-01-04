<?php


namespace WilokeUnitTest\Controllers;


use PHPUnit\Framework\TestCase;
use WilokeUnit\Controllers\PostController;

class TestPostController extends TestCase
{
	public function testValidation()
	{
		$aValidation = (new PostController())->validation(['title' => 'Hello']);
		$this->assertTrue($aValidation['success']);
	}
}
