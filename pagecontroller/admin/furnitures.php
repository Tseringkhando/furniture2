<?php
	$title='Manage Categories';

if (isset($_POST['type'])) {
	$allFurnitures_list = $furniture_table->find('product_detail', $_POST['filterProduct']);
	$cat_all = $furniture_cat->findAll();

	$cri=[
		'allFurnitures_list'=>$allFurnitures_list
	];
}

else{
	$allFurnitures=$furniture_table->findAll();
	$allFurnitures_list=$allFurnitures->fetchAll();


	$cri=[
		'allFurnitures_list'=>$allFurnitures_list
	];
}
	
	$content = loadTemplate("../../view/admin/furnitures_view.php", $cri);