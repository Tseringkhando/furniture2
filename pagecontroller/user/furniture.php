<script>
	function viewType(){
		var xmlHttp = new XMLHttpRequest();		
		xmlHttp.open('POST', '../view/user/filter.php', true);
		var data = new FormData();
		data.append('furniture_cond', this.value);
		xmlHttp.send(data);

		xmlHttp.onreadystatechange = function(){
			if(xmlHttp.readyState == 4){
				var furnitureAll = document.getElementById('furniture_list');
				furnitureAll.innerHTML = xmlHttp.responseText;
			}
		}
	}
	function changeFurniture(){
		var ele = document.getElementsByClassName('furniture_condition')[0];
		ele.addEventListener('change', viewType);
	}

	document.addEventListener('DOMContentLoaded', changeFurniture);
</script>
<?php
// if (isset($_POST['furniture_cond'])) {
// 	$furnitureQuery = $furniture_table->find('type', $_POST['furniture_cond']);
// }
// else{
 	$furnitureQuery=$furniture_table->limitView(10);
//}
 	$categoryQuery=$furniture_cat->findAll();

	$vars = [
		'furnitureQuery'=>$furnitureQuery, 
		'furniture_table'=>$furniture_table,
		'furniture_cat'=> $furniture_cat,
		'categoryQuery'=> $categoryQuery
	];
 $title = "All Furnitures";
 $content = loadTemplate("../view/user/furniture_view.php", $vars);
?>


		