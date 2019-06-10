	<sction class="right">
		
	<h2>List Of Furnitures</h2>
	<h3><a class="add" href="addeditFurnitures">Add New Furniture</a></h3>
	<table class="tables">
	
			
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Details</th>
			<th>Price</th>
			<th>Type</th>
			<th>Display</th>
			<th>Action</th>
		</tr>
	
		
			<?php
				$sn=1;
				foreach ($allFurnitures_list as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['description'].
					'</td><td>'.$row['price'].'</td><td>'.$row['type'].'</td><td>'; if($row['display']==1) echo'Show';else echo "Hide";?></td>
					<td style="padding: 0;"><a href="addeditFurnitures&fid=<?php echo $row['id'];?>">Edit</a>
					 <a onclick= "return confirm('Are you sure to delete?');" href="addeditFurnitures&dfid=<?php echo $row['id']; ?>">Delete</a></td></tr>
						<?php $sn++; ?>
			 <?php }
		?>
	</table>
		</section>
