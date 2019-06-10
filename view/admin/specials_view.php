<section class="right">
	<h2>Manage Offers</h2>
	<h4><a class="add" href="addEditSpecials">Add New Offer</a></h4>
	<table class="tables">
		<?php $sn=1; ?>
		<tr>
			<th>SN</th>
			<th>Title</th>
			<th>Details</th>
			<th>Starting</th>
			<th>Ending</th>
			<th>Action</th>
		</tr>

		<tr>
			<?php foreach ($all_offers as $row){ ?>
				<td><?php echo $sn; $sn++ ?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo $row['offer_starting'];?></td>
				<td><?php echo $row['offer_ending'];?></td>
				<td><a href="addEditSpecials&asid=<?php echo $row['id'];?>">EDIT</a> <a onclick= "return confirm('Are you sure to delete?');" href="addEditSpecials&dsid=<?php echo $row['id'];?>">DELETE</a></td></tr>
			<?php } ?>
		
	</table>

</section>