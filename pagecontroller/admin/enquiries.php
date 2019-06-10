<?php
	$all_enquiries= $enquiries->findAll();
	$all_enquirieslist= $all_enquiries->fetchAll(); 

//marking the enquiry completed 
	if (isset($_GET['eid'])) 
	{
		//$admin_id=$_SESSION['userId'];
		$id=$_GET['eid'];
		$admin= $_SESSION['user'];
		$records=['id'=>$id, 'admin'=>$admin, 'completed'=>1];
		if($enquiries->update($records, 'id'))
		{

			echo '
				<script>
				alert("Saved");
				document.location = "enquiries";
				</script>';
		}

	}


	//deleting  the enquiry
	if (isset($_GET['deid'])) {
	
		if($enquiries->delete('id',$_GET['deid']))
	{
		echo '<script>
				alert("Deleted");
				document.location = "enquiries";
				</script>';
	}
	}

	$cri=[ 'all_enquirieslist'=>$all_enquirieslist];
	$title= 'Visitor Enquiries';

	$content=loadTemplate("../../view/admin/enquiry_view.php",$cri);
 ?>