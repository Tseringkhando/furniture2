<main class="admin">
	<section class="left">

		<ul>

			<?php foreach ($categoryQuery as $cate) { ?>
				<li><a href="category&cate_id=<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">

	<h1>Furniture</h1>
	<!-- Filter new or second hand conditions -->
	<div class="filters">
		
		<form action="" method="POST">
			<label>Condition:</label>
			<select class="furniture_condition" >
				<option value="first hand">First Hand</option>
				<option value="second hand">Second Hand</option>
			</select>
		</form>
		<br> <br> <br> <br> <br>
	</div>
	<ul id="furniture_list" class="furniture">
		
<?php
		
		foreach ($furnitureQuery as $furniture) {
			if($furniture['display']==1){
			$categoryQuery=$furniture_cat->find('id',$furniture['cat_id']);
			$category = $categoryQuery->fetch();

		echo '<li>';

		if (file_exists('../images/furniture/' . $furniture['id'] . '.jpg')) {
			echo '<a href="../images/furniture/' . $furniture['id'] . '.jpg"><img src="../images/furniture/' . $furniture['id'] . '.jpg" /></a>';
		}

		echo '<div class="details">';
		echo '<h2>' . $furniture['name'] . '</h2>';
		echo '<h3>' . $category['name'] . '</h3>';
		echo '<h4>£' . $furniture['price'] . '</h4>';
		echo '<h3>'. strtoupper($furniture['type']).'</h3>';
		echo '<p>' . $furniture['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	
	}
}

	?>

</ul>

</section>

</main>