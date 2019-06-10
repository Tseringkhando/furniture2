<?php
if(isset($_POST['login']))
{
	$logger = $admins->find('username',$_POST['username']);
	if($logger->rowCount()>0)
	{
		$logger_row=$logger->fetch();
		if(password_verify($_POST['password'], $logger_row['password']))
		{
			$_SESSION['userId']=$logger_row['id'];
			$_SESSION['user']=$logger_row['username'];
			$_SESSION['type']=$logger_row['role'];
			$_SESSION['isLogged']=true;
			header('Location:admin/admin_home');

		}
		else
		{
			echo "Invalid Password";
		}
	}

	else
	{
		echo "User Not Found";
	}
}


 $title = "Log In";
 $content = loadTemplate("../view/admin/login_view.php", []);
?>