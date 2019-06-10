<?php 
	//for login form
	function testLogin($testValue){
		$isValid = true;
		if($testValue['username'] == ""){
			$isValid = false;
		}
		if($testValue['password'] == ""){
			$isValid = false;
		}
		return $isValid;
	}
	
	//for contact form
	function testContact($contactValue){
		$isValid = true;
		if($contactValue['name'] == ""){
			$isValid = false;
		}
		if($contactValue['email'] == ""){
			$isValid = false;
		}
		if($contactValue['telephone'] == ""){
			$isValid = false;
		}
		if($contactValue['enquiry'] == ""){
			$isValid = false;
		}
		return $isValid;
	}

	//for category form
	function testAddCat($categoryVal){
		$isValid = true;
		if($categoryVal['name'] == ""){
			$isValid = false;
		}
		return $isValid;
	}

	//for staff form
	function testAdmin($staffRowVal){
		$isValid = true;
		if($staffRowVal['username'] == ""){
			$isValid = false;
		}
		if($staffRowVal['password'] == ""){
			$isValid = false;
		}
		if($staffRowVal['role'] == ""){
			$isValid = false;
		}
		return $isValid;
	}

	//for updates form
	function testSpecial($updateRowVal){
		$isValid = true;
		if($updateRowVal['name'] == ""){
			$isValid = false;
		}
		if($updateRowVal['description'] == ""){
			$isValid = false;
		}
		if($updateRowVal['offer_starting'] == ""){
			$isValid = false;
		}
		return $isValid;
	}

	//for furniture form
	function testFurniture($furVal){
		$isValid = true;
		if($furVal['name'] == ""){
			$isValid = false;
		}
		if($furVal['description'] == ""){
			$isValid = false;
		}
		if($furVal['price'] == ""){
			$isValid = false;
		}
		
		return $isValid;
	}
?>