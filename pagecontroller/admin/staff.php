<?php 
	$title='Manage Staff';
	$allStaff=$admins->findAll();
	$allStaff_list=$allStaff->fetchAll();

	$cri=[
		'allStaff_list'=>$allStaff_list
	];
	$content = loadTemplate("../../view/admin/staff_view.php", $cri);
 ?>