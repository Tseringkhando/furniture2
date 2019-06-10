<?php 
	//furniture form testing
	class FurTest extends \PHPUnit_Framework_TestCase
	{
		function testAllEmpty(){
			$rowVal = [
				'name' => '',
				'description' => '',
				'price' => ''
			];
			$isValid = testFurniture($rowVal);
			$this->assertFalse($isValid);
		}

		function testInvalidName(){
			$rowVal = [
				'name' => '',
				'description' => 'desc',
				'price' => '9898'
				
			];
			$isValid = testFurniture($rowVal);
			$this->assertFalse($isValid);
		}
		function testInvalidDescription(){
			$rowVal = [
				'name' => 'dumName',
				'description' => '',
				'price' => '9898'
			];
			$isValid = testFurniture($rowVal);
			$this->assertFalse($isValid);
		}
		function testInvalidPrice(){
			$rowVal = [
				'name' => 'dumName',
				'description' => 'desc',
				'price' => ''
			];
			$isValid = testFurniture($rowVal);
			$this->assertFalse($isValid);
		}
		
		function testValidAll(){
			$rowVal = [
				'name' => 'dumName',
				'description' => 'desc',
				'price' => '9898'
			];
			$isValid = testFurniture($rowVal);
			$this->assertTrue($isValid);
		}
	}
?>