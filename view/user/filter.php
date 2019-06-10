<?php 
	require '../../db/connect.php';
	require '../../classes/DatabaseTable.php';
	
	$furniture = new DatabaseTable('furniture');
	$cats = new DatabaseTable('category');

	$fur = $furniture->find('type', $_POST['furniture_cond']);
	$allcat = $cats->findAll();
	
	foreach ($fur as $furniture) {
		if($furniture['display']==1){
			$categoryQuery = $cats->find('id', $furniture['cat_id']);
			$categoryFetched = $categoryQuery->fetch(); 
	
	echo '<li>';

	
			echo '<a href="../images/furniture/' . $furniture['id'] . '.jpg"><img src="../images/furniture/' . $furniture['id'] . '.jpg" /></a>';
	

		echo '<div class="details">';
		echo '<h2>' . $furniture['name'] . '</h2>';
		echo '<h3>' . $categoryFetched['name'] . '</h3>';
		echo '<h4>£' . $furniture['price'] . '</h4>';
		echo '<h3>'. strtoupper($furniture['type']).'</h3>';
		echo '<p>' . $furniture['description'] . '</p>';

		echo '</div>';
		echo '</li>';
} } ?>