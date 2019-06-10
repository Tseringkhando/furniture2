 <?php


  $furnitureQuery=$furniture_table->find('cat_id',$_GET['cate_id']);
 	$categoryQuery=$furniture_cat->findAll();

 	  $cat_name=$furniture_cat->find('id',$_GET['cate_id']);
 	  $cat_name=$cat_name->fetch();

	$vars = [
		'furnitureQuery'=>$furnitureQuery, 
		'furniture_cat'=> $furniture_cat,
		'categoryQuery'=> $categoryQuery,
		'cat_name'=>$cat_name
	];
 $title = "All Furnitures";
 $content = loadTemplate("../view/user/category_view.php", $vars);
?>

		