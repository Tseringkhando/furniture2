
<main class="admin">
	<section class="left">
		<ul>
			<?php foreach ($categoryQuery as $cate) { ?>
				<li><a href="category&cate_id=<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">

		<h1><?php echo $cat_name['name']; ?></h1>

	<ul class="furniture">
<?php
	
		foreach ($furnitureQuery as $furniture) {
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
		echo '<p>' . $furniture['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	}

	?>

</ul>

</section>

</main>