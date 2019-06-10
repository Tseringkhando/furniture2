<?php 
	class SpecialTest extends \PHPUnit_Framework_TestCase
	{
		function testAllEmpty(){
			$rowVal = [
				'name' => '',
				'description' => '',
				'offer_starting' => ''
			];
			$isValid = testSpecial($rowVal);
			$this->assertFalse($isValid);
		}

		function testInvalidTitle(){
			$rowVal = [
				'name' => '',
				'description' => 'desc',
				'offer_starting' => '2019-03-04'
			];
			$isValid = testSpecial($rowVal);
			$this->assertFalse($isValid);
		}
		function testInvalidDescription(){
			$rowVal = [
				'name' => 'testing',
				'description' => '',
				'offer_starting' => '2019-03-04'
			];
			$isValid = testSpecial($rowVal);
			$this->assertFalse($isValid);
		}
		function testInvalidDate(){
			$rowVal = [
				'name' => 'testing',
				'description' => 'desc',
				'offer_starting' => ''
			];
			$isValid = testSpecial($rowVal);
			$this->assertFalse($isValid);
		}
		function testValidAll(){
			$rowVal = [
				'name' => 'testing',
				'description' => 'desc',
				'offer_starting' => '2019-03-04'
			];
			$isValid = testSpecial($rowVal);
			$this->assertTrue($isValid);
		}
	}
?>