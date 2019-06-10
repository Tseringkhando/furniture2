	<section class="right">
	<h2>List Of Categories</h2>
	<h3><a class="add" href="addeditcat">Add New Category</a></h3>

	<table class="tables">
		<thead>
			
		<tr>
			<th>SN</th>
			<th>Category Name</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
			
	
			<?php
				$sn=1;
				foreach ($allCategories_list as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].' </td><td><a href="addeditcat&cid='.$row['id']. '">Edit</a>';?>  <a onclick= "return confirm('Are you sure to delete?');" href="addeditcat&dcid=<?php echo $row['id']; ?>">Delete</a></td>
				<?php	$sn++; ?>
		<?php	}
		?>
			</tbody>
	</table>
		</sction>
