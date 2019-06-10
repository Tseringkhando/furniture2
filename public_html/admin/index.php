<?php
	session_start();
	require'../../includes/admin_init.php';
	
	
		if(isset($_GET['page'])){
			if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) 
				require '../../pagecontroller/admin/'.$_GET['page']. '.php';
			else
				require '../../pagecontroller/admin/admin_home.php';
		}
		else{
			require '../../pagecontroller/admin/admin_home.php';
		}

		$tempVars = [
			'title' => $title,
			'content' => $content
		];
		
		echo loadTemplate('../../view/admin/layout.php', $tempVars);
		
		
?>