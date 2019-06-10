<?php 
if(isset($_GET['asid'])){
	$offer_id=$specials->find('id',$_GET['asid']);
	$offer=$offer_id->fetch();
	$cri=[
		'offer'=>$offer
		];
}
else{
	$cri=[];
}

if (isset($_POST['addOffer'])) {
		
		if($_POST['name'] == "" || $_POST['description'] == "") echo "<script>alert('Fill in all the forms')</script>";

		else{
			$values = [
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'description' => $_POST['description'],
				'offer_starting' => $_POST['offer_starting'],
				'offer_ending'=> $_POST['offer_ending']
			];

			$check = $specials->save($values, 'id');

			if ($_FILES['special_img']['error'] == 0) {
			
			$fileName =$specials->imageUpload().'.jpg';
			move_uploaded_file($_FILES['special_img']['tmp_name'], '../../images/Specialoffer/' . $fileName);
				}

			if($check == true){
				echo '<script>
					 alert("Offers Saved!");
					 document.location="specials";
					 </script>';
			}else{
				echo '<script>
					 alert("!!!!!!!!!Could not save Offers!!!!!!!!!!!!");
					 </script>';
			}
		}
}

//deleting offers
if (isset($_GET['dsid'])) {
	if($specials->delete('id',$_GET['dsid']))
	{
		echo '<script>
				alert("Offers Deleted");
				document.location = "specials";
				</script>';
	}
}
$title='Add/Edit Offers';

$content=loadTemplate("../../view/admin/addEditSpecials_view.php",$cri);
 ?>
