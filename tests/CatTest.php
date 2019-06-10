<?php 
	class CatTest extends \PHPUnit_Framework_TestCase
	{
		function testInvalidCategoryName(){
			$rowVal = [
				'name' => ''
			];
			$isValid = testAddCat($rowVal);
			$this->assertFalse($isValid);
		}
		function testValidCategory(){
			$rowVal = [
				'name' => 'Cats'
			];
			$isValid = testAddCat($rowVal);
			$this->assertTrue($isValid);
		}
	}
?>