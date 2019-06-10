<?php 
	class ConTest extends \PHPUnit_Framework_TestCase
	{

		function testAllEmpty(){
			$rowValues = [
				'name' => '',
				'email' => '',
				'telephone' => '',
				'enquiry' => '',
			];
			$isValid = testContact($rowValues);
			$this->assertFalse($isValid);
		}

		function testInvalidFullname(){
			$rowValues = [
				'name' => '',
				'email' => 'testing@gm.com',
				'telephone' => '12345678',
				'enquiry' => 'test',
			];
			$isValid = testContact($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidEmail(){
			$rowValues = [
				'name' => 'testing',
				'email' => '',
				'telephone' => '12345678',
				'enquiry' => 'test',
			];
			$isValid = testContact($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidTelephone(){
			$rowValues = [
				'name' => 'testing',
				'email' => 'testing@gm.com',
				'telephone' => '',
				'enquiry' => 'test',
			];
			$isValid = testContact($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidEnquiry(){
			$rowValues = [
				'name' => 'text',
				'email' => 'testing@gm.com',
				'telephone' => '12345678',
				'enquiry' => '',
			];
			$isValid = testContact($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidAll(){
			$rowValues = [
				'name' => 'text',
				'email' => 'testing@gm.com',
				'telephone' => '12345678',
				'enquiry' => 'enquiress',
			];
			$isValid = testContact($rowValues);
			$this->assertTrue($isValid);
		}
	}
?>