<?php
if (isset($_POST['enquiry_button'])) {
$entries=[
			
			'name'=>$_POST['name'],
			'email'=>$_POST['email'],
			'telephone'=>$_POST['telephone'],
			'enquiry'=>$_POST['enquiry'],
		];

		$check = $enquiries->insert($entries);
		if($check == true){
			echo '
				<script>
				alert("Enquiry Submitted");
				document.location = "contact";
				</script>';
		}else{
			echo '
				<script>
				alert("Enquiry Submitted");
				</script>';
		}
}
 $title = "Contact Us";
 $content = loadTemplate("../view/user/contact_view.php", []);
?>

		