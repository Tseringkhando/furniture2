<?php
if(isset($_GET['cid'])){
	$allcats=$furniture_cat->find('id',$_GET['cid']);
	$cat_detail=$allcats->fetch();
	$cri=[
		'cat_detail'=>$cat_detail
		];
}
else{
	$cri=[];
}

if(isset($_GET['dcid'])){
	if($furniture_cat->delete('id',$_GET['dcid']))
	
		header('Location:categories');

}
if(isset($_POST['addcat']))
{

	//checking data inserted or not
	if($_POST['name'] == "" ) echo "<h2>Fill in the name</h2>";
		
else{
		$entries=[
			'id'=>$_POST['id'],
			'name'=>$_POST['name']
		];
		$check = $furniture_cat->save($entries,'id');
		if($check == true){
			echo '
				<script>
				alert("Category Saved");
				document.location = "categories";
				</script>';
		}else{
			echo '
				<script>
				alert("Category Not Saved");
				</script>';
		}
	}
}



$title='Add/Edit Category';
$content=loadTemplate("../../view/admin/addeditcat_view.php", $cri);
?>