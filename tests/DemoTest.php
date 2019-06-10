<?php
	require 'functions/testingFunctions.php';
	class DemoTest extends \PHPUnit_Framework_TestCase
	{
		function testInvalidUsername(){
			$rowValues = [
				'username' => '',
				'password' => 'dumdum'
			];
			$isValid = testLogin($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidPassword(){
			$rowValues = [
				'username' => 'dumdum',
				'password' => ''
			];
			$isValid = testLogin($rowValues);
			$this->assertFalse($isValid);
		}
		function testValidAll(){
			$rowValues = [
				'username' => 'dumdum',
				'password' => 'dumdum'
			];
			$isValid = testLogin($rowValues);
			$this->assertTrue($isValid);
		}
		
	}
?>