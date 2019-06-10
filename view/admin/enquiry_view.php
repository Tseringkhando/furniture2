<sction class="right">
	
	<h2>List Of Enquiries</h2>

	<table class="tables">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Email</th>
			<th>Enquiry</th>
			<th>Action</th>
			<th>Reviewer</th>
		</tr>
			<?php
				$sn=1;
				foreach ($all_enquirieslist as $row) {
						if($row['completed']==0)
							//shows checked if the admin has marked it completed
				$complete = '<a href="enquiries&eid='.$row['id'].'">Complete</a>'; 	else{$complete='Checked';} 
						
				echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['email'].
					'</td><td>'.$row['enquiry'].'</td>'.'<td>'.$complete;?>
						<a onclick= "return confirm('Are you sure to delete?');" href="enquiries&deid=<?php echo $row['id']; ?>">DELETE</a>
					</td><td> <?php echo $row['admin']; ?></td>
					<?php $sn++; ?>
			<?php } ?>
	</table>
		</section>
