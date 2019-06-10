<?php
$cats=$furniture_cat->findAll();
	$cat_details=$cats->fetchAll();
if(isset($_GET['fid'])){
	$allFurnitures=$furniture_table->find('id',$_GET['fid']);
	$furniture_detail=$allFurnitures->fetch();
	
	$cri=[
		'furniture_detail'=>$furniture_detail,
		'cat_details'=>$cat_details
		];
}
else{
	$cri=['cat_details'=>$cat_details];
}

if(isset($_GET['dfid'])){
	if($furniture_table->delete('id',$_GET['dfid']))
	{
		echo '<script>
				alert("Furnitures Deleted");
				document.location = "furnitures";
				</script>';
	}
}
if(isset($_POST['addFurniture']))
{
		if($_POST['name'] == "" || $_POST['description'] == "" ||$_POST['price']=="") echo "<script>alert('Fill in all the forms')</script>";
		else
		{

			$entries=[
				'id'=>$_POST['id'],
				'name'=>$_POST['name'],
				'description'=>$_POST['description'],
				'price'=>$_POST['price'],
				'type'=>$_POST['type'],
				'display'=>$_POST['display'],
				'cat_id'=>$_POST['cat_id']
			];

			$check = $furniture_table->save($entries,'id');

			
		if ($_FILES['img']['error'] == 0) {
		
			$fileName =$furniture_table->imageUpload().'.jpg';
			move_uploaded_file($_FILES['img']['tmp_name'], '../../images/furniture/' . $fileName);
		}
			if($check == true){
				echo '
					<script>
					alert("Furnitures Saved");
					document.location = "furnitures";
					</script>';
			}else{
				echo '
					<script>
					alert("Furnitures Not Saved");
					</script>';
			}
		}
	}




$title='Add/Edit Category';
$content=loadTemplate("../../view/admin/addeditFurnitures_view.php", $cri);
?>