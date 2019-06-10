<?php 
$admin_detail= $admins->findAll();
$admin_list= $admin_detail->fetchAll();

if(isset($_GET['aid'])){
	$admin_id=$admins->find('id',$_GET['aid']);
	$admin_list=$admin_id->fetch();
	$cri=[
		'admin_list'=>$admin_list
		];
}

if(isset($_GET['daid'])){
	$admins->delete('id',$_GET['daid']);
	header('Location:staff');
}


if (isset($_POST['addAdmin'])) {
		
		if($_POST['username'] == "" || $_POST['password'] == "") echo "<script>alert('Fill in all the forms')</script>";

		else{
			$values = [
				'id' => $_POST['id'],
				'username' => $_POST['username'],
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
				'role'     => $_POST['role']
			];

			$check = $admins->save($values, 'id');
			if($check == true){
				echo '<script>
					 alert("Staff Saved!");
					 document.location="staff";
					 </script>';
			}else{
				echo '<script>
					 alert("!!!!!!!!!Could not save staff!!!!!!!!!!!!");
					 </script>';
			}
		}
}
$title='Add/Edit Administrators';
$cri=['admin_list'=>$admin_list];
$content=loadTemplate("../../view/admin/addEditAdmin_view.php", $cri);

 ?>