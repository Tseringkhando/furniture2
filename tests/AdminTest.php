<?php 
	class AdminTest extends \PHPUnit_Framework_TestCase{
		function testAllEmpty(){
			$rowVal = [
				'username' => '',
				'password' => '',
				'role' => ''
			];
			$isValid = testAdmin($rowVal);
			$this->assertFalse($isValid);
		}

		function testInvalidUsername(){
			$rowVal = [
				'username' => '',
				'password' => 'dumms',
				'role' => 'admin'
			];
			$isValid = testAdmin($rowVal);
			$this->assertFalse($isValid);
		}
		function testInvalidPassword(){
			$rowVal = [
				'username' => 'tessts',
				'password' => '',
				'role' => 'admin'
			];
			$isValid = testAdmin($rowVal);
			$this->assertFalse($isValid);
		}
		function testInvalidRole(){
			$rowVal = [
				'username' => 'tessts',
				'password' => 'dumms',
				'role' => ''
			];
			$isValid = testAdmin($rowVal);
			$this->assertFalse($isValid);
		}
		function testValidAll(){
			$rowVal = [
				'username' => 'tessts',
				'password' => 'dumms',
				'role' => 'admin'
			];
			$isValid = testAdmin($rowVal);
			$this->assertTrue($isValid);
		}
	}
?>